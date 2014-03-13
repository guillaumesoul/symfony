<?php
/**
 * Created by PhpStorm.
 * User: guillaumesoullard1
 * Date: 11/03/2014
 * Time: 16:32
 */

namespace Shorty\FirstBundle\Services;

class Md5 implements HashInterface {

    public function hash($sti) {
        return md5($sti);

    }
}