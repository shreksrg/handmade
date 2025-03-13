<?php

return [
    'autoload' => false,
    'hooks' => [
        'upgrade' => [
            'ldcms',
        ],
        'app_init' => [
            'ldcms',
        ],
        'config_init' => [
            'ldcms',
            'summernote',
        ],
    ],
    'route' => [
        '/example$' => 'example/index/index',
        '/example/d/[:name]' => 'example/demo/index',
        '/example/d1/[:name]' => 'example/demo/demo1',
        '/example/d2/[:name]' => 'example/demo/demo2',
        '/$' => 'ldcms/index/index',
        '/search' => 'ldcms/search/index',
        '/sitemap.xml' => 'ldcms/sitemap/index',
        '/tag/[:tag]$' => 'ldcms/tag/index',
        '/[:category]$' => 'ldcms/lists/index',
        '/[:category]/[:id]$' => 'ldcms/detail/index',
    ],
    'priority' => [],
    'domain' => '',
];
