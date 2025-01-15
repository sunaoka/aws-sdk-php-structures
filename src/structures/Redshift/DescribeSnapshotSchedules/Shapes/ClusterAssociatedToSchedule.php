<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeSnapshotSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterIdentifier
 * @property 'MODIFYING'|'ACTIVE'|'FAILED'|null $ScheduleAssociationState
 */
class ClusterAssociatedToSchedule extends Shape
{
    /**
     * @param array{
     *     ClusterIdentifier?: string|null,
     *     ScheduleAssociationState?: 'MODIFYING'|'ACTIVE'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
