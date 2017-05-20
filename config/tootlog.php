<?php
return [
    'version'       => 'v0.9.0-beta',

    //一度に更新するアカウント数
    'account_limit' => 3,

    //連続して失敗したらサーバーが死んでる判定。
    'account_fails' => 10,

    //streaming api用のURLが違う場合
    'streaming'     => [
        'https://mstdn.jp' => 'https://streaming.mstdn.jp',
    ],

    'favicon_size' => 24,

    //faviconが違う場合
    'favicon'      => [
        //        'https://chitose.moe' => 'chitose_icon.png',
        'https://pawoo.net' => 'favicon.png',
    ],
];
