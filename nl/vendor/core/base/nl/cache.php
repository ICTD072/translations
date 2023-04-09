<?php

return [
    'cache_management' => 'Cachebeheer',
    'cache_commands' => 'Wis cache-opdrachten',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Wis alle CMS-cache',
            'description' => 'CMS-caching wissen: databasecaching, statische blokken... Voer deze opdracht uit als u de wijzigingen niet ziet na het bijwerken van gegevens.',
            'success_msg' => 'Cache opgeschoond',
        ],
        'refresh_compiled_views' => [
            'title' => 'Gecompileerde weergaven vernieuwen',
            'description' => 'Wis gecompileerde weergaven om weergaven up-to-date te houden.',
            'success_msg' => 'Cacheweergave vernieuwd',
        ],
        'clear_config_cache' => [
            'title' => 'Wis de configuratiecache',
            'description' => 'Mogelijk moet u de configuratiecache vernieuwen wanneer u iets wijzigt in de productieomgeving.',
            'success_msg' => 'Configuratiecache opgeschoond',
        ],
        'clear_route_cache' => [
            'title' => 'Routecache wissen',
            'description' => 'Cacherouting wissen.',
            'success_msg' => 'De routecache is opgeschoond',
        ],
        'clear_log' => [
            'title' => 'Logboek opschonen',
            'description' => 'Wis systeemlogbestanden',
            'success_msg' => 'Het systeemlogboek is opgeschoond',
        ],
    ],
];
