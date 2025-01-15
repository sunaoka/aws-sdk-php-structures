<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ListPrices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Tld
 * @property string|null $Marker
 * @property int<min, 1000>|null $MaxItems
 */
class ListPricesRequest extends Request
{
    /**
     * @param array{
     *     Tld?: string|null,
     *     Marker?: string|null,
     *     MaxItems?: int<min, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
