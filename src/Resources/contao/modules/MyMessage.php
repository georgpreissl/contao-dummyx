<?php

/**
 * Contao bundle contao-om-backend
 *
 * @copyright OMOS.de 2017 <http://www.omos.de>
 * @author    René Fehrmann <rene.fehrmann@omos.de>
 * @link      https://github.com/OMOSde/contao-om-backend
 * @license   LGPL 3.0+
 */


/**
 * Namespace
 */
namespace GeorgPreissl\DummyX;



/**
 * Class ModuleBackendTabs
 *
 * @copyright René Fehrmann
 * @author    René Fehrmann <rene.fehrmann@omos.de>
 */
class MyMessage extends \BackendModule
{


	protected $strTemplate = 'mod_mymessage';

    protected function compile()
    {
        $this->Template->html = "hello you!";
    }



}

