<?php

/**
 * Attributes
 *
 * PHP version 5
 *
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2016 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */
namespace Analytify\phpseclib3\File\ASN1\Maps;

use Analytify\phpseclib3\File\ASN1;
/**
 * Attributes
 *
 * @author  Jim Wigginton <terrafrost@php.net>
 */
abstract class Attributes
{
    const MAP = ['type' => ASN1::TYPE_SET, 'min' => 1, 'max' => -1, 'children' => Attribute::MAP];
}
