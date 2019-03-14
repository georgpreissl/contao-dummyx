<?php

/**
 * Created by PhpStorm.
 * User: darko
 * Date: 20.06.17
 * Time: 23:16
 */

namespace GeorgPreissl\DummyX;



use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Configures the Contao news bundle.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class GeorgPreisslDummyX extends Bundle
{


    public function compile()
    {
        return "jo";
    }

}
