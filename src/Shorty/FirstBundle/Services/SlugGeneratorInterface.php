<?php
/**
 * Created by PhpStorm.
 * User: guillaumesoullard1
 * Date: 11/03/2014
 * Time: 15:43
 */
namespace Shorty\FirstBundle\Services;

// Declaration de l'interface 'iTemplate'
interface SlugGeneratorInterface
{
    public function generateSlug($url);
}

