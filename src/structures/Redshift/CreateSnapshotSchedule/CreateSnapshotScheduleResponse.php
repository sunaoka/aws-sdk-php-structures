<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateSnapshotSchedule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string> $ScheduleDefinitions
 * @property string $ScheduleIdentifier
 * @property string $ScheduleDescription
 * @property list<Shapes\Tag> $Tags
 * @property list<\Aws\Api\DateTimeResult> $NextInvocations
 * @property int $AssociatedClusterCount
 * @property list<Shapes\ClusterAssociatedToSchedule> $AssociatedClusters
 */
class CreateSnapshotScheduleResponse extends Response
{
}
