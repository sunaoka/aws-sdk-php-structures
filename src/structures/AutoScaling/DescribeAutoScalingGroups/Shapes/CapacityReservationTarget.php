<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $CapacityReservationIds
 * @property list<string>|null $CapacityReservationResourceGroupArns
 */
class CapacityReservationTarget extends Shape
{
    /**
     * @param array{
     *     CapacityReservationIds?: list<string>|null,
     *     CapacityReservationResourceGroupArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
