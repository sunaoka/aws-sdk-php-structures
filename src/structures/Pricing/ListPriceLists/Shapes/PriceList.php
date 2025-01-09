<?php

namespace Sunaoka\Aws\Structures\Pricing\ListPriceLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PriceListArn
 * @property string $RegionCode
 * @property string $CurrencyCode
 * @property list<string> $FileFormats
 */
class PriceList extends Shape
{
    /**
     * @param array{
     *     PriceListArn?: string,
     *     RegionCode?: string,
     *     CurrencyCode?: string,
     *     FileFormats?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
