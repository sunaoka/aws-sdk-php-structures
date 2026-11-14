<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkingFlexCostAllocationPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CidrRange
 * @property string $CidrLabel
 */
class FlexCostAllocationCidrMapping extends Shape
{
    /**
     * @param array{
     *     CidrRange: string,
     *     CidrLabel: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
