<?php

namespace app\models;

use ishop\App;

class Breadcrumbs
{
    public static function getBreadcrumbs($category_id, $name = '') {
        $cats = App::$app->getProperty('cats');
        $breadcrumbs_array = self::getParts($cats,$category_id);
        $breadcrumbs = "<li><a href='" . PATH . "'>Home</a></li>";
        if($breadcrumbs_array) {
            foreach ($breadcrumbs_array as $key => $value) {
                $breadcrumbs .= "<li><a href='" . PATH . "/category/$key'>$value</a></li>";
            }
        }
        if($name) {
            $breadcrumbs .= "<li>$name</li>";
        }
        return $breadcrumbs;
    }

    public static function getParts($cats, $id) {
        if (!$id) {
            return false;
        }
        $breadcrumbs = [];

        while ($id != 0) {
            if (isset($cats[$id])) {
                $breadcrumbs[$cats[$id]['alias']] = $cats[$id]['title'];
                $id = $cats[$id]['parent_id'];
            } else {
                $id = 0;
            }
        }
        return array_reverse($breadcrumbs, true);
    }
}