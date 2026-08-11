<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IntegerRangeConstraint|null $minPort
 * @property IntegerRangeConstraint|null $maxPort
 */
class PortRangeConstraints extends Shape
{
    /**
     * @param array{
     *     minPort?: IntegerRangeConstraint|null,
     *     maxPort?: IntegerRangeConstraint|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
