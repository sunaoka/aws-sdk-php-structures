<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeSnapshotSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ScheduleDefinitions
 * @property string $ScheduleIdentifier
 * @property string $ScheduleDescription
 * @property list<Tag> $Tags
 * @property list<\Aws\Api\DateTimeResult> $NextInvocations
 * @property int $AssociatedClusterCount
 * @property list<ClusterAssociatedToSchedule> $AssociatedClusters
 */
class SnapshotSchedule extends Shape
{
    /**
     * @param array{
     *     ScheduleDefinitions?: list<string>,
     *     ScheduleIdentifier?: string,
     *     ScheduleDescription?: string,
     *     Tags?: list<Tag>,
     *     NextInvocations?: list<\Aws\Api\DateTimeResult>,
     *     AssociatedClusterCount?: int,
     *     AssociatedClusters?: list<ClusterAssociatedToSchedule>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
