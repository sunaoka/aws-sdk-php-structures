<?php

namespace Sunaoka\Aws\Structures\Payments\GetAccountBalance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property string $currency
 */
class CurrencyAmount extends Shape
{
    /**
     * @param array{
     *     value: string,
     *     currency: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
