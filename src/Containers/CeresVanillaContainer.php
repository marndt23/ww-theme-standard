<?php

namespace wwTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('wwTheme::Stylesheet');
    }
}