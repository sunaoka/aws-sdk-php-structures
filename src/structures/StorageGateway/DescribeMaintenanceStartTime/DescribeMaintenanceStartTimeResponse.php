<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeMaintenanceStartTime;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GatewayARN
 * @property int<0, 23> $HourOfDay
 * @property int<0, 59> $MinuteOfHour
 * @property int<0, 6> $DayOfWeek
 * @property int<1, 28> $DayOfMonth
 * @property string $Timezone
 * @property Shapes\SoftwareUpdatePreferences $SoftwareUpdatePreferences
 */
class DescribeMaintenanceStartTimeResponse extends Response
{
}
