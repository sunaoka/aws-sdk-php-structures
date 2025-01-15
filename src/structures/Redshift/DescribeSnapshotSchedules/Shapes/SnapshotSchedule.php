<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeSnapshotSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ScheduleDefinitions
 * @property string|null $ScheduleIdentifier
 * @property string|null $ScheduleDescription
 * @property list<Tag>|null $Tags
 * @property list<\Aws\Api\DateTimeResult>|null $NextInvocations
 * @property int|null $AssociatedClusterCount
 * @property list<ClusterAssociatedToSchedule>|null $AssociatedClusters
 */
class SnapshotSchedule extends Shape
{
    /**
     * @param array{
     *     ScheduleDefinitions?: list<string>|null,
     *     ScheduleIdentifier?: string|null,
     *     ScheduleDescription?: string|null,
     *     Tags?: list<Tag>|null,
     *     NextInvocations?: list<\Aws\Api\DateTimeResult>|null,
     *     AssociatedClusterCount?: int|null,
     *     AssociatedClusters?: list<ClusterAssociatedToSchedule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
