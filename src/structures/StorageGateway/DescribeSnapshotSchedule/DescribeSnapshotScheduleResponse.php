<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeSnapshotSchedule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $VolumeARN
 * @property int $StartAt
 * @property int $RecurrenceInHours
 * @property string $Description
 * @property string $Timezone
 * @property list<Shapes\Tag> $Tags
 */
class DescribeSnapshotScheduleResponse extends Response
{
}
