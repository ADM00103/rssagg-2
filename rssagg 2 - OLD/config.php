<?php
return [
    'site_name' => 'IT News',
    'site_url'   => 'https://w99522bk.beget.tech',
    'timezone'   => 'Europe/Moscow',
    'theme_default' => 'dark',
    'ttl'        => 86400,
    'auto_update_interval' => 900,

    'cron_token' => '7f3c2b9a4d8e6f1c0a9b5d3e7f8a1c4d6b2e9f0a7c5d8e1b3f6a9c2d4e7f8a1b',

    'cache_txt'  => __DIR__ . '/cache/txt',
    'cache_img'  => __DIR__ . '/cache/img',
    'data_dir'   => __DIR__ . '/data',
    'logs_dir'   => __DIR__ . '/logs',

    'sources' => [
        [
            'name' => 'Habr',
            'type' => 'rss',
            'url'  => 'https://habr.com/ru/rss/hubs/all/',
        ],
        [
            'name' => '3DNews',
            'type' => 'rss',
            'url'  => 'https://3dnews.ru/news/rss/',
        ],
        [
            'name' => 'Xakep',
            'type' => 'rss',
            'url'  => 'https://xakep.ru/feed/',
        ],
         [
            'name' => '3dnewsGAMES',
            'type' => 'rss',
            'url'  => 'https://feeds.feedburner.com/3dnews/elyv',
        ],
        [
            'name' => '3dnewsSOFT',
            'type' => 'rss',
            'url'  => 'https://feeds.feedburner.com/3dnews/fbuv',
        ],
        [
            'name' => '3dnews2',
            'type' => 'rss',
            'url'  => 'https://feeds.feedburner.com/3dnews/halb',
        ],
        [
            'name' => 'AFeedCallednewscomss',
            'type' => 'rss',
            'url'  => 'https://feeds.feedburner.com/zapier/tGin',
        ],
        [
            'name' => 'FreeSteam',
            'type' => 'rss',
            'url'  => 'http://feeds.feedburner.com/freesteam/lQDE',
        ],
        [
            'name' => 'iXBT.com',
            'type' => 'rss',
            'url'  => 'https://feeds.feedburner.com/ixbt/gSRD',
        ],
        [
            'name' => 'iXBT.gamesv2',
            'type' => 'rss',
            'url'  => 'https://politepol.com/fd/3vpeexJrRBn9',
        ],
        [
            'name' => 'IXBT.GAMES',
            'type' => 'rss',
            'url'  => 'http://feeds.feedburner.com/gametech/dVHe',
        ],
        [
            'name' => 'MMO13',
            'type' => 'rss',
            'url'  => 'https://feeds.feedburner.com/mmo13/vBSwUWG0mTx',
        ],
        [
            'name' => 'PLAYER ONE',
            'type' => 'rss',
            'url'  => 'https://feeds.feedburner.com/mail/zILX',
        ],
        [
            'name' => 'Techimo - Последние новости',
            'type' => 'rss',
            'url'  => 'https://techimo.ru/rss/',
        ],
        [
            'name' => 'БесплатныераздачиSteam',
            'type' => 'rss',
            'url'  => 'http://feeds.feedburner.com/SteamOriginUplayGog',
        ],
        
    ],
];