<?php

return [
    'alipay' => [
        'app_id'         => '2016091400508284',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvbSaUxsbhii+QzZV22z6e6iM4yWaY1mMHwM9eVBRasMF5WwOlG9nSE0xFxvkL9fWc3carOPE3XoLCyTIkR2wUz4fvfT1Fot4xoWkMF/gfQD/FoxFD8fTXq7u6ICBTgig8xuBR8Z7llp+yRI1i5kp10lJETsISvZDziGOp+oLWaaBMfTSYYvwUjPIn3AG/jrBsXkuzQdeatCfnhKu7UWDtEkzm7odGv6g6xoS7aYCBqQLgU51D1xOq2uxe0v2tFllM/m7KHznUXxiKPlcG8/m8MO3sFEIrxyIMs/izQULcpK0OsDBOPQxV/IueRe4uGZI2d3TCWe9D0AtcFGfkSoNKwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAvbSaUxsbhii+QzZV22z6e6iM4yWaY1mMHwM9eVBRasMF5WwOlG9nSE0xFxvkL9fWc3carOPE3XoLCyTIkR2wUz4fvfT1Fot4xoWkMF/gfQD/FoxFD8fTXq7u6ICBTgig8xuBR8Z7llp+yRI1i5kp10lJETsISvZDziGOp+oLWaaBMfTSYYvwUjPIn3AG/jrBsXkuzQdeatCfnhKu7UWDtEkzm7odGv6g6xoS7aYCBqQLgU51D1xOq2uxe0v2tFllM/m7KHznUXxiKPlcG8/m8MO3sFEIrxyIMs/izQULcpK0OsDBOPQxV/IueRe4uGZI2d3TCWe9D0AtcFGfkSoNKwIDAQABAoIBAEzswjN254dUWCqLCu+qVjv0kgS9x8gHlMEyoCfkQM+I+4gXdCYOspPn8UMMpVAdNrGll2SKC9c/WOEQ7l+h6VEn/NkbTpLwxW3C3VxcVHx7/fRXtt16SyS2zNvs2AIbj6BlA9xmCNFkKstAHgRYfFX3OrDI/kjfaYlZpC5Ewot8PWPRCmg16XFqx1cmjsSSqeZT+4AxI/iP5sSis+Tb1lXrE3QO23tVbLgNklqFHxoOHgw2mCIeDiNWYBP9hvBdF6Ca87pL5HAgdGjEb2DNMNYbufcVQzUj6kb3sa4DmmpbJWB62L+CYIX1rjWH3KkSxiNKG026DJD+gW2sD2sMGhkCgYEA31pffG0lc68Y50Ac+g+OmZtngHcA5UPgOkDxiOQ0klRAbE//g/fiaGq1+peJqm7cpBjDdOxrtBxHy3mvmh4IRkGfrOPIrdq7jOSKIoz9ObgpIwDqF5t/wyI7CqvMhWsc+jw7U29Sfsri2NrkOIjfRyAr4QPa+kYYGTMOaj6/L70CgYEA2W8s7g8jh8oC0bWoSPvgFYrkFtCq/Gpwg2AaAV3KwQ7LVb1H8wWa22v5wsYv+mQMB3z/XX5nipVqg8sNeXB8wkxeHiG4Xogrw94mzTszuWAOPrEziV9Mb2r6lT2AOnK4HGP0q3v6V1ADTRJFFsVnoTD6xpF8l/xE6CqFe7XHKwcCgYBUCfoRpDPKUmDJajs876uVKn8IPD6vBRoScSswecU6Jc9TscoPiq664SP11RzsbuhAKj0o+mgQDfAJpJCpKZGtdbWx5Mc2ey3Edp1vIKOLGzsHO6nZFh49etzCSCAdN09g7FbaLvHYWVh/heUHTKDOb1FzSfMT5lnc6XQMD+359QKBgAtu0xf5Z87eCmPof17HD7NSSEgC1NrM5fmidfuYaO7ZzktF1qCqrMfY15ssPJ2X4SILqonJ+bvJu34OkTjPd1/oEBLZhw5Bbruv1K557HBU4qrdOm6Auk4pe9+ZCkMIgTHM97KEpFcu9913lnZqDtbk8mq6f6imNSFYCwjEOCLFAoGBAJ6GI4XtPGfOUvPjYMFysiB/fDxH+Xh1P6qtfR1pz1h/pt7GuwxtlibXl8c7UgyMvPSI0oP2uBiqEDbTS5/eST0fiTeinp83MFAv0nJuFEq8x+yedkKSdKr7f0sHI0oo95jjffBbLSDJqbpTMGQpLsJOyX2Agoerqomr0jiRFBty',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
