<?php

namespace wwThemeStandard\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('wwThemeStandard::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}