<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeSnapshotSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterIdentifier
 * @property 'MODIFYING'|'ACTIVE'|'FAILED' $ScheduleAssociationState
 */
class ClusterAssociatedToSchedule extends Shape
{
    /**
     * @param array{
     *     ClusterIdentifier?: string,
     *     ScheduleAssociationState?: 'MODIFYING'|'ACTIVE'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
