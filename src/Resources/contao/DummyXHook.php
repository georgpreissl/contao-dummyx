<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2005-2017
 * @author     Leo Feyer <http://www.contao.org>
 * @package    DomPdf
 * @license    LGPL
 * @filesource
 */

namespace GeorgPreissl\DummyX;


/**
 * Class DompdfIgniter
 *
 * Provide methods to export articles as PDF using DOMPDF.
 *
 * @copyright  Leo Feyer 2009-2011
 * @author     Leo Feyer <http://www.contao.org>
 * @package    Controller
 *
 * since 2013
 * @author     Darko Selesi <http://w3scouts.com>
 */
class DummyXHook extends \Frontend
{
	/**
	 * Export an article to PDF
	 * @param string
	 * @param object
	 * @return string
	 */
    public function myReplaceInsertTags($strTag)
    {


        // Parameter abtrennen
        $arrSplit = explode('::', $strTag);

        if ($arrSplit[0] != 'dummy' && $arrSplit[0] != 'cache_foo')
        {
            //nicht unser Insert-Tag
            return false;
        }
        // Parameter angegeben?
        if (isset($arrSplit[1]) && $arrSplit[1] == 'x')
        {
            return 'dummyx';
        } else {
            return 'Fehler! foo ohne Parameter!';
        }
    }
}

