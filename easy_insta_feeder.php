<?php
   /*
   Plugin Name: Easy Instagram Feeder
   Plugin URI: https://github.com/alexroan/easy-instagram-feeder
   Description: Get the instagram feed of any public instagram user without the need for instagram api credentials.
   Version: 0.1
   Author: Alex Roan
   Author URI: http://alexroan.co.uk
   */
require_once "vendor/autoload.php";

class Easy_Insta_Feeder{

    public static function get_feed($username){
        $insta_results = [];
        $instagram = new \InstagramScraper\Instagram();
        $media = $instagram->getMedias($username);
        foreach($media as $item){
            $insta_item = new stdClass();

            //ID
            $insta_item->id = $item->getId();

            //username
            $insta_item->username = $username;

            //time
            $insta_item->time = $item->getCreatedTime();

            //type
            $insta_item->type = $item->getType();

            //likes
            $insta_item->likes = $item->getLikesCount();

            //comments
            $insta_item->comments = $item->getCommentsCount();

            //text
            $insta_item->text = $item->getCaption();

            //media link
            $insta_item->media = $item->getLink();

            //high res media link
            $insta_item->high_res_media = $item->getImageHighResolutionUrl();

            array_push($insta_results, $insta_item);

        }
        return $insta_results;
    }

}

if( ! function_exists( 'get_instagram_feed' )){
    function get_instagram_feed($username) {
        return Easy_Insta_Feeder::get_feed('alex_roan');
    }
}