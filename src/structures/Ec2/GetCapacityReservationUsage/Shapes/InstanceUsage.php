<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityReservationUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property int|null $UsedInstanceCount
 */
class InstanceUsage extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     UsedInstanceCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
