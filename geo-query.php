<?php
/**
 * Plugin Name: Geo Query
 * Description: Modify the WP_Query to support the geo_query parameter. Uses the Haversine SQL optimization by Ollie Jones.
 * Plugin URI:
 * Author:	Birgir Erlendsson (birgire)
 * Version:     0.0.1
 * Licence:     MIT
 */

namespace Birgir\Geo;

/**
 * Autoload
 */

\add_action( 'plugins_loaded', function()
{
    require __DIR__ . '/vendor/autoload.php';
});


/**
 * Init
 */

\add_action( 'init', function()
{    
    if( class_exists( __NAMESPACE__ . '\\GeoQueryContext' ) )
    {
     	$o = new GeoQueryContext();
        $o->setup( $GLOBALS['wpdb'] )->activate();
    }

});
