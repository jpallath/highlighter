<?
/*
* Plugin Name: Highlighter
* Plugin URI: http://www.jerrypallath.com
* Description: Highlighting Specified Content in Posts
* Version: 1.0
* Author: Jerry Pallath
*/

function highlighter($content){
    // first term:
    $content = str_replace('is','<span class="highlighted" style="background:yellow;">is</span>', $content);
    // second term
    $content = str_replace('WordPress', '<span class="highlighted" style="background:pink;">WordPress</span>', $content);
    // finished
    return $content;
}

add_filter('the_content','highlighter');

?>

