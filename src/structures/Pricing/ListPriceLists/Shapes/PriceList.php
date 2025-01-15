<?php

namespace Sunaoka\Aws\Structures\Pricing\ListPriceLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PriceListArn
 * @property string|null $RegionCode
 * @property string|null $CurrencyCode
 * @property list<string>|null $FileFormats
 */
class PriceList extends Shape
{
    /**
     * @param array{
     *     PriceListArn?: string|null,
     *     RegionCode?: string|null,
     *     CurrencyCode?: string|null,
     *     FileFormats?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
