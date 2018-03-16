<?php

namespace wwTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class wwThemeItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('wwTheme::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}