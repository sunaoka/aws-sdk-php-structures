<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstancesOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Amount
 * @property 'Hourly'|null $Frequency
 */
class RecurringCharge extends Shape
{
    /**
     * @param array{
     *     Amount?: double|null,
     *     Frequency?: 'Hourly'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
