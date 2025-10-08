<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdatePartnership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 999999999>|null $startingInterchangeControlNumber
 * @property int<1, 999999999>|null $startingFunctionalGroupControlNumber
 * @property int<1, 999999999>|null $startingTransactionSetControlNumber
 */
class X12ControlNumbers extends Shape
{
    /**
     * @param array{
     *     startingInterchangeControlNumber?: int<1, 999999999>|null,
     *     startingFunctionalGroupControlNumber?: int<1, 999999999>|null,
     *     startingTransactionSetControlNumber?: int<1, 999999999>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
