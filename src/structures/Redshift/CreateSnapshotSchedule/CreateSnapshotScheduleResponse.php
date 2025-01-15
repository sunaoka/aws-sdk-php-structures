<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateSnapshotSchedule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string>|null $ScheduleDefinitions
 * @property string|null $ScheduleIdentifier
 * @property string|null $ScheduleDescription
 * @property list<Shapes\Tag>|null $Tags
 * @property list<\Aws\Api\DateTimeResult>|null $NextInvocations
 * @property int|null $AssociatedClusterCount
 * @property list<Shapes\ClusterAssociatedToSchedule>|null $AssociatedClusters
 */
class CreateSnapshotScheduleResponse extends Response
{
}
