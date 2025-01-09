<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeMaintenanceStartTime;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GatewayARN
 * @property int $HourOfDay
 * @property int $MinuteOfHour
 * @property int $DayOfWeek
 * @property int $DayOfMonth
 * @property string $Timezone
 * @property Shapes\SoftwareUpdatePreferences $SoftwareUpdatePreferences
 */
class DescribeMaintenanceStartTimeResponse extends Response
{
}
