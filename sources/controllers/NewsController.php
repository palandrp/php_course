<?php

include_once ROOT.'/sources/models/News.php';

class NewsController
{

    public function actionIndex()
    {
        $newsList = array();
        $newsList = News::getNewsList();

        echo '<pre>';
        print_r($newsList);
        echo '</pre>';

        return true;
    }

    public function actionView($category, $id)
    {
        if ($id) {
            $newsItem = News::getNewsItemById($id);

            echo '<pre>';
            print_r($newsItem);
            echo '</pre>';

            echo 'actionView';
        }
        
        return true;
    }

}