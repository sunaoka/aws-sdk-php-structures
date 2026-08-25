<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $defaultValue
 * @property IntegerConstraints|null $constraints
 */
class IntegerParameterConfig extends Shape
{
    /**
     * @param array{
     *     defaultValue?: int|null,
     *     constraints?: IntegerConstraints|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
