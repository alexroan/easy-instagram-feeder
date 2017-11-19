# easy-instagram-feeder
Wordpress plugin to retrieve a user's feed without the need for instagram api credentials.

## Installation

* Copy the entire repo into your plugins/ folder
* Activate in wordpress dashboard

## Usage

```php
//get feed
$feed = get_instagram_feed('alex_roan');

//loop through posts
foreach($feed as $post){ 

    //Id
    $id = $post->id;

    //username
    $username = $post->username;

    //time
    $time = $post->time;

    //type
    $type = $post->type;

    //likes
    $likes = $post->likes;

    //number of comments
    $comments = $post->comments;

    //text caption
    $text = $post->text;

    //media
    $media = $post->media;

    //high res media
    $high_res_media = $post->high_res_media;

}
```
