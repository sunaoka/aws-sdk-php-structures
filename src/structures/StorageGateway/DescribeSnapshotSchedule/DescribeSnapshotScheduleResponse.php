<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeSnapshotSchedule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $VolumeARN
 * @property int<0, 23>|null $StartAt
 * @property int<1, 24>|null $RecurrenceInHours
 * @property string|null $Description
 * @property string|null $Timezone
 * @property list<Shapes\Tag>|null $Tags
 */
class DescribeSnapshotScheduleResponse extends Response
{
}
