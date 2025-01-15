<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetOfferingStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MonetaryAmount|null $cost
 * @property 'MONTHLY'|null $frequency
 */
class RecurringCharge extends Shape
{
    /**
     * @param array{
     *     cost?: MonetaryAmount|null,
     *     frequency?: 'MONTHLY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
