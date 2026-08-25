<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'on-demand'>|null $MarketTypes
 */
class ReservedCapacityFallbackOptions extends Shape
{
    /**
     * @param array{MarketTypes?: list<'on-demand'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
