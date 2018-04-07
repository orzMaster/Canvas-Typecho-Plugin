<?php
if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}

/**
 * 一个非常好看的网页粒子背景插件，不需要依赖任何第三方库即可运行，提供额非常炫酷的背景。
 * 
 * @package Canvas 
 * @author orzMaster
 * @version 1.0.0
 * @link http://orzsoft.site
 */

define('CANVAS_VERSION', '1.0.0');

class Canvas_Plugin extends Typecho_Widget implements Typecho_Plugin_Interface
{
    public static function activate()
    {
        Typecho_Plugin::factory('Widget_Archive')->footer = array('Canvas_Plugin','footer');
    }

    public static function deactivate()
    {

    }

    public static function config(Typecho_Widget_Helper_Form $form)
    {
    
    }

    public static function personalConfig(Typecho_Widget_Helper_Form $form)
    {
        
    }

    public static function render()
    {
        
    }

    public static function footer()
    {
        echo "<script type=\"text/javascript\" color=\"0,0,255\" opacity=\"0.7\" zIndex=\"-2\" count=\"99\" src=\"//cdn.bootcss.com/canvas-nest.js/1.0.1/canvas-nest.min.js\"></script>\n";
    }
}
