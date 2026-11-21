<?php

namespace Sunaoka\Aws\Structures\Payments\GetAccountBalance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CurrencyAmount $amount
 * @property string $merchantOfRecord
 */
class AccountBalance extends Shape
{
    /**
     * @param array{
     *     amount: CurrencyAmount,
     *     merchantOfRecord: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
