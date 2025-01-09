<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstancesOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Count
 * @property double $Price
 */
class PricingDetail extends Shape
{
    /**
     * @param array{
     *     Count?: int,
     *     Price?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
