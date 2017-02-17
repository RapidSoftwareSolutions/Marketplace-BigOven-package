<?php

namespace Core;

if ( ! defined( 'RAPID_IN' ) ) exit( 'No direct script access allowed' );

/**
 * Custom Model
 */
class CustomModel
{
    public static function synchronizeGroceryList($param, &$blockCustom, $vendorUrl){
        $result['list']['Items'] = $param['req_list_Items'];
        $result['list']['Recipes'] = $param['req_list_Recipes'];
        if(isset($param['since'])){
            $result['since'] = $param['since'];
        }

        return json_encode($result);
    }

    public static function createRecipe($param, &$blockCustom, $vendorUrl){
        $result = $param;
        $result['Ingredients'] = '[]';

        return json_encode($result);
    }
}