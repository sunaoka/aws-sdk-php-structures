<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $CapacityReservationIds
 * @property list<string> $CapacityReservationResourceGroupArns
 */
class CapacityReservationTarget extends Shape
{
    /**
     * @param array{
     *     CapacityReservationIds?: list<string>,
     *     CapacityReservationResourceGroupArns?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
