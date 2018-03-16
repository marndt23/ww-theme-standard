<?php

namespace wwTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class wwThemeItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('wwTheme::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}