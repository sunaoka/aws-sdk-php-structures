<?php

namespace Sunaoka\Aws\Structures\FreeTier\GetAccountActivity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $amount
 * @property 'USD' $unit
 */
class MonetaryAmount extends Shape
{
    /**
     * @param array{
     *     amount: double,
     *     unit: 'USD'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
