<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHosts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InstanceCapacity>|null $AvailableInstanceCapacity
 * @property int|null $AvailableVCpus
 */
class AvailableCapacity extends Shape
{
    /**
     * @param array{
     *     AvailableInstanceCapacity?: list<InstanceCapacity>|null,
     *     AvailableVCpus?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
