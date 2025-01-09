<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityReservationUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property int $UsedInstanceCount
 */
class InstanceUsage extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     UsedInstanceCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
