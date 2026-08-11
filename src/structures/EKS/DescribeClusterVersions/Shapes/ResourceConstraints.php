<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AllowedValuesConstraint|null $name
 * @property IntegerRangeConstraint|null $weight
 */
class ResourceConstraints extends Shape
{
    /**
     * @param array{
     *     name?: AllowedValuesConstraint|null,
     *     weight?: IntegerRangeConstraint|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
