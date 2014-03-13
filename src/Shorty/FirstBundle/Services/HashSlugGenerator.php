<?php
/**
 * Created by PhpStorm.
 * User: guillaumesoullard1
 * Date: 11/03/2014
 * Time: 15:54
 */

namespace Shorty\FirstBundle\Services;

// Implémentation de l'interface
// Ceci va fonctionner
class HashSlugGenerator implements SlugGeneratorInterface
{

    private $sha;//remplace encoder par sha1

    public function __construct($encoder){
        $this->sha = $encoder;
    }

    public function generateSlug($url)
    {
        return $this->sha->hash($url);
    }
}