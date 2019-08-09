<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorise';

    protected $primaryKey = 'id';

    //允许批量赋值的字段
    protected $fillable = ['name', 'level', 'path'];

    //后期绑定
    protected static function boot()
    {

        parent::boot();
        // 监听 Category 的创建事件，用于初始化 path 和 level 字段值
        static::creating(function (Category $category) {
            // 如果创建的是一个根类目
            if (is_null($category->parent_id)) {
                // 将层级设为 0
                $category->level = 0;
                // 将 path 设为 -
                $category->path = '-';
            } else {
                // 将层级设为父类目的层级 + 1
                $category->level = $category->parent->level + 1;
                // 将 path 值设为父类目的 path 追加父类目 ID 以及最后跟上一个 - 分隔符
                $category->path = $category->parent->path . $category->parent_id . '-';
            }
        });
    }

    //反向一对多 子类目to父类目
    public function parent()
    {
        $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    //一对多  父类目to子类目
    public function children()
    {
        $this->hasMany(Category::class, 'parent_id', 'id');
    }

    //一对多  类目to商品
    public function products()
    {
        $this->hasMany(Product::class, 'category_id', 'id');
    }

    //访问器  分割path 获取所有父类目ID
    public function getPathIdsAttribute()
    {
        return array_filter(explode('-', trim($this->path, '-')));
    }

    //访问器，获取所有祖先类目并按层级排序
    public function getAncestorsAttribute()
    {
        return Category::query()
            ->whereIn('id', $this->path_ids)
            ->orderBy('level')
            ->get();
    }

    //访问器，获取以 - 为分隔的所有祖先类目名称以及当前类目的名称
    public function getFullNameAttribute()
    {
        return $this->ancestors
            ->pluck('name')
            ->push($this->name)//当前类目追加到所有父类目末尾
            ->implode(' - ');//以 - 分割组成字符串
    }
}



