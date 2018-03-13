<?php

namespace wwThemeStandard\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('wwThemeStandard::Stylesheet');
    }
}