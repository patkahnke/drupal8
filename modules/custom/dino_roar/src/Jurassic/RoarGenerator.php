<?php

/**
 * Created by PhpStorm.
 * User: patrickkahnke
 * Date: 8/22/16
 * Time: 8:48 PM
 */

namespace Drupal\dino_roar\Jurassic;

class RoarGenerator
{
    public function getRoar($length)
    {
        return 'R'.str_repeat('O', $length).'AR!';
    }
}