<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHosts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AvailableCapacity
 * @property string $InstanceType
 * @property int $TotalCapacity
 */
class InstanceCapacity extends Shape
{
    /**
     * @param array{
     *     AvailableCapacity?: int,
     *     InstanceType?: string,
     *     TotalCapacity?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
