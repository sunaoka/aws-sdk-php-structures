<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ListPrices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Price
 * @property string $Currency
 */
class PriceWithCurrency extends Shape
{
    /**
     * @param array{
     *     Price: double,
     *     Currency: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
