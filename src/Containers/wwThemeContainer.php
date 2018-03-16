<?php

namespace wwTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class wwThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('wwTheme::Stylesheet');
    }
}