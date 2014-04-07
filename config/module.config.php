<?php
return array(
    'router' => include __DIR__ . '/module/router.config.php',
    'di' => include __DIR__ . '/module/di.config.php',

    'doctrine' => array(
        'driver' => array(
            'app_driver' => array(
                'paths' => array(__DIR__ . '/../src/HcbStoreProductWatched/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    'HcbStoreProductWatched\Entity' => 'app_driver'
                )
            )
        )
    ),

    'asset_manager' => array(
        'resolver_configs' => array(
            'paths' => array(
                'HcbStoreProductWatched' => __DIR__ . '/../public',
            )
        )
    ),

//    'hc-backend'=> array(
//        'packages' => array(
//            'hcb-store-product-watched' => array(
//                'js'=>array(
//                    'type'=>'content',
//                    'http_path'=>'/js/src/hcb-store-product-watched'
//                )
//            )
//        )
//    )
);
