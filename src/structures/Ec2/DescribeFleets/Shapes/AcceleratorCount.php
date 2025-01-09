<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Min
 * @property int $Max
 */
class AcceleratorCount extends Shape
{
    /**
     * @param array{
     *     Min?: int,
     *     Max?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
