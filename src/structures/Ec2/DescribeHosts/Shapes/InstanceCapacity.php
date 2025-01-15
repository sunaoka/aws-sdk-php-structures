<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHosts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AvailableCapacity
 * @property string|null $InstanceType
 * @property int|null $TotalCapacity
 */
class InstanceCapacity extends Shape
{
    /**
     * @param array{
     *     AvailableCapacity?: int|null,
     *     InstanceType?: string|null,
     *     TotalCapacity?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
