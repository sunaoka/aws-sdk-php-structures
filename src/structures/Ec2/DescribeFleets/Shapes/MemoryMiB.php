<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Min
 * @property int|null $Max
 */
class MemoryMiB extends Shape
{
    /**
     * @param array{
     *     Min?: int|null,
     *     Max?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
