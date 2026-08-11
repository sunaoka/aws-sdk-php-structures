<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceNodePortRange|null $defaultValue
 * @property PortRangeConstraints|null $constraints
 */
class PortRangeParameterConfig extends Shape
{
    /**
     * @param array{
     *     defaultValue?: ServiceNodePortRange|null,
     *     constraints?: PortRangeConstraints|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
