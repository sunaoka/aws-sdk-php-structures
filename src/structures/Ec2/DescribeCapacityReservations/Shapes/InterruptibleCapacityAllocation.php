<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $InstanceCount
 * @property int|null $TargetInstanceCount
 * @property 'pending'|'active'|'updating'|'canceling'|'canceled'|'failed'|null $Status
 * @property string|null $InterruptibleCapacityReservationId
 * @property 'adhoc'|null $InterruptionType
 */
class InterruptibleCapacityAllocation extends Shape
{
    /**
     * @param array{
     *     InstanceCount?: int|null,
     *     TargetInstanceCount?: int|null,
     *     Status?: 'pending'|'active'|'updating'|'canceling'|'canceled'|'failed'|null,
     *     InterruptibleCapacityReservationId?: string|null,
     *     InterruptionType?: 'adhoc'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
