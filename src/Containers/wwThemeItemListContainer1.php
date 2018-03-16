<?php

namespace wwTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class wwThemeItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('wwTheme::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}