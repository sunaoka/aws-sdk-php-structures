<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstancesOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Amount
 * @property 'Hourly' $Frequency
 */
class RecurringCharge extends Shape
{
    /**
     * @param array{
     *     Amount?: double,
     *     Frequency?: 'Hourly'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
