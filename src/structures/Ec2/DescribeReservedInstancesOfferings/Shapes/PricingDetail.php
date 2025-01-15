<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstancesOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Count
 * @property double|null $Price
 */
class PricingDetail extends Shape
{
    /**
     * @param array{
     *     Count?: int|null,
     *     Price?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
