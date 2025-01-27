<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Automattic\\Jetpack\\Assets' => $baseDir . '/jetpack_vendor/automattic/jetpack-assets/src/class-assets.php',
    'Automattic\\Jetpack\\Assets\\Script_Data' => $baseDir . '/jetpack_vendor/automattic/jetpack-assets/src/class-script-data.php',
    'Automattic\\Jetpack\\Assets\\Semver' => $baseDir . '/jetpack_vendor/automattic/jetpack-assets/src/class-semver.php',
    'Automattic\\Jetpack\\Autoloader\\AutoloadFileWriter' => $vendorDir . '/automattic/jetpack-autoloader/src/AutoloadFileWriter.php',
    'Automattic\\Jetpack\\Autoloader\\AutoloadGenerator' => $vendorDir . '/automattic/jetpack-autoloader/src/AutoloadGenerator.php',
    'Automattic\\Jetpack\\Autoloader\\AutoloadProcessor' => $vendorDir . '/automattic/jetpack-autoloader/src/AutoloadProcessor.php',
    'Automattic\\Jetpack\\Autoloader\\CustomAutoloaderPlugin' => $vendorDir . '/automattic/jetpack-autoloader/src/CustomAutoloaderPlugin.php',
    'Automattic\\Jetpack\\Autoloader\\ManifestGenerator' => $vendorDir . '/automattic/jetpack-autoloader/src/ManifestGenerator.php',
    'Automattic\\Jetpack\\Composer\\Manager' => $vendorDir . '/automattic/jetpack-composer-plugin/src/class-manager.php',
    'Automattic\\Jetpack\\Composer\\Plugin' => $vendorDir . '/automattic/jetpack-composer-plugin/src/class-plugin.php',
    'Automattic\\Jetpack\\Constants' => $baseDir . '/jetpack_vendor/automattic/jetpack-constants/src/class-constants.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'QuadLayers\\WPMI\\Api\\Rest\\Endpoints\\Backend\\Base' => $baseDir . '/lib/api/rest/endpoints/backend/class-base.php',
    'QuadLayers\\WPMI\\Api\\Rest\\Endpoints\\Backend\\Libraries\\Get' => $baseDir . '/lib/api/rest/endpoints/backend/libraries/class-get.php',
    'QuadLayers\\WPMI\\Api\\Rest\\Endpoints\\Backend\\Navmenu\\Get' => $baseDir . '/lib/api/rest/endpoints/backend/navmenu/class-get.php',
    'QuadLayers\\WPMI\\Api\\Rest\\Endpoints\\Backend\\Settings\\Delete' => $baseDir . '/lib/api/rest/endpoints/backend/settings/class-delete.php',
    'QuadLayers\\WPMI\\Api\\Rest\\Endpoints\\Backend\\Settings\\Get' => $baseDir . '/lib/api/rest/endpoints/backend/settings/class-get.php',
    'QuadLayers\\WPMI\\Api\\Rest\\Endpoints\\Backend\\Settings\\Post' => $baseDir . '/lib/api/rest/endpoints/backend/settings/class-post.php',
    'QuadLayers\\WPMI\\Api\\Rest\\Endpoints\\Base' => $baseDir . '/lib/api/rest/endpoints/class-base.php',
    'QuadLayers\\WPMI\\Api\\Rest\\Endpoints\\Route' => $baseDir . '/lib/api/rest/endpoints/interface-route.php',
    'QuadLayers\\WPMI\\Api\\Rest\\Routes_Library' => $baseDir . '/lib/api/rest/class-routes-library.php',
    'QuadLayers\\WPMI\\Controllers\\Backend' => $baseDir . '/lib/controllers/class-backend.php',
    'QuadLayers\\WPMI\\Controllers\\Frontend' => $baseDir . '/lib/controllers/class-frontend.php',
    'QuadLayers\\WPMI\\Controllers\\Libraries' => $baseDir . '/lib/controllers/class-libraries.php',
    'QuadLayers\\WPMI\\Controllers\\Navmenu' => $baseDir . '/lib/controllers/class-navmenu.php',
    'QuadLayers\\WPMI\\Entities\\Libraries\\Base' => $baseDir . '/lib/entities/libraries/class-base.php',
    'QuadLayers\\WPMI\\Entities\\Libraries\\Dashicons' => $baseDir . '/lib/entities/libraries/class-dashicons.php',
    'QuadLayers\\WPMI\\Entities\\Libraries\\Elegant_Icons' => $baseDir . '/lib/entities/libraries/class-elegant-icons.php',
    'QuadLayers\\WPMI\\Entities\\Libraries\\Elusive' => $baseDir . '/lib/entities/libraries/class-elusive.php',
    'QuadLayers\\WPMI\\Entities\\Libraries\\Fontawesome' => $baseDir . '/lib/entities/libraries/class-fontawesome.php',
    'QuadLayers\\WPMI\\Entities\\Libraries\\Fontello' => $baseDir . '/lib/entities/libraries/class-fontello.php',
    'QuadLayers\\WPMI\\Entities\\Libraries\\Foundation' => $baseDir . '/lib/entities/libraries/class-foundation.php',
    'QuadLayers\\WPMI\\Entities\\Libraries\\Icomoon' => $baseDir . '/lib/entities/libraries/class-icomoon.php',
    'QuadLayers\\WPMI\\Entities\\Libraries\\Library' => $baseDir . '/lib/entities/libraries/interface-library.php',
    'QuadLayers\\WPMI\\Entities\\Libraries\\Themify' => $baseDir . '/lib/entities/libraries/class-themify.php',
    'QuadLayers\\WPMI\\Menu_Item_Custom_Fields_Walker' => $baseDir . '/lib/class-menu-item-custom-fields-walker.php',
    'QuadLayers\\WPMI\\Models\\Base' => $baseDir . '/lib/models/class-base.php',
    'QuadLayers\\WPMI\\Models\\Libraries' => $baseDir . '/lib/models/class-libraries.php',
    'QuadLayers\\WPMI\\Models\\Navmenu' => $baseDir . '/lib/models/class-navmenu.php',
    'QuadLayers\\WPMI\\Models\\Settings' => $baseDir . '/lib/models/class-settings.php',
    'QuadLayers\\WPMI\\Plugin' => $baseDir . '/lib/class-plugin.php',
    'QuadLayers\\WP_Dashboard_Widget_News\\Load' => $baseDir . '/jetpack_vendor/quadlayers/wp-dashboard-widget-news/src/Load.php',
    'QuadLayers\\WP_Notice_Plugin_Promote\\Load' => $baseDir . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Load.php',
    'QuadLayers\\WP_Notice_Plugin_Promote\\PluginByFile' => $baseDir . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginByFile.php',
    'QuadLayers\\WP_Notice_Plugin_Promote\\PluginBySlug' => $baseDir . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginBySlug.php',
    'QuadLayers\\WP_Notice_Plugin_Promote\\PluginBySlugV2' => $baseDir . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginBySlugV2.php',
    'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginActions' => $baseDir . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginActions.php',
    'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginActionsLinks' => $baseDir . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginActionsLinks.php',
    'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginDataByFile' => $baseDir . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginDataByFile.php',
    'QuadLayers\\WP_Notice_Plugin_Required\\Load' => $baseDir . '/jetpack_vendor/quadlayers/wp-notice-plugin-required/src/Load.php',
    'QuadLayers\\WP_Notice_Plugin_Required\\Plugin' => $baseDir . '/jetpack_vendor/quadlayers/wp-notice-plugin-required/src/Plugin.php',
    'QuadLayers\\WP_Plugin_Install_Tab\\Load' => $baseDir . '/jetpack_vendor/quadlayers/wp-plugin-install-tab/src/Load.php',
    'QuadLayers\\WP_Plugin_Suggestions\\Load' => $baseDir . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Load.php',
    'QuadLayers\\WP_Plugin_Suggestions\\Page' => $baseDir . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Page.php',
    'QuadLayers\\WP_Plugin_Suggestions\\Table' => $baseDir . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Table.php',
    'QuadLayers\\WP_Plugin_Table_Links\\Load' => $baseDir . '/jetpack_vendor/quadlayers/wp-plugin-table-links/src/Load.php',
);
