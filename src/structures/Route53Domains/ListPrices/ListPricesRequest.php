<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ListPrices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Tld
 * @property string $Marker
 * @property int<min, 1000> $MaxItems
 */
class ListPricesRequest extends Request
{
    /**
     * @param array{
     *     Tld?: string,
     *     Marker?: string,
     *     MaxItems?: int<min, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
