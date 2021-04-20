<?php

namespace app\models;

class Product extends AppModel
{
    public function setRecentlyViewed($id) {
        $recentlyViewed = $this->getAllRecentlyViewed();
        if (!$recentlyViewed) {
            setcookie('recentleViewed', $id, time() + 3600*24, '/');
        } else {
            $recentlyViewed = explode('.', $recentlyViewed);
            if (!in_array($id, $recentlyViewed)) {
                $recentlyViewed[] = $id;
                $recentlyViewed = implode('.', $recentlyViewed);
                setcookie('recentleViewed', $recentlyViewed, time() + 3600*24, '/');
            }
        }
    }

    public function getRecentlyViewed() {
        $result = false;
        if (!empty($_COOKIE['recentleViewed'])) {
            $result = $_COOKIE['recentleViewed'];
            $result = explode('.', $result);
            $result = array_slice($result,-3);
        }
        return $result;
    }

    public function getAllRecentlyViewed() {
        $result = false;
        if (!empty($_COOKIE['recentleViewed'])) {
            $result = $_COOKIE['recentleViewed'];
        }
        return $result;
    }
}