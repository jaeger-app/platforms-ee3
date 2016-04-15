<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./Platforms/View/Ee3.php
 */
namespace JaegerApp\Platforms\View;

/**
 * Jaeger - Ee3 View Object
 *
 * Contains the view helpers for ExpressionEngine 3
 *
 * @package View
 * @author Eric Lamb <eric@mithra62.com>
 */
class Ee3 extends AbstractView
{
    /**
     * Returns a string to use for the form field errors
     *
     * @return string
     */
    public function m62FormErrors($errors)
    {
        $return = '';
        if( is_array($errors) && count($errors) >= 1)
        {
            $return = '<em>';
            foreach($errors AS $error)
            {
                $return .= $this->m62Escape($error).'<br />';
            }
            $return .= '</em>';
        }
        
        return $return;
    }    
}