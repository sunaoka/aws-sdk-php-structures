<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHosts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InstanceCapacity> $AvailableInstanceCapacity
 * @property int $AvailableVCpus
 */
class AvailableCapacity extends Shape
{
    /**
     * @param array{
     *     AvailableInstanceCapacity?: list<InstanceCapacity>,
     *     AvailableVCpus?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
