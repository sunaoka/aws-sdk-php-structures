<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeMaintenanceStartTime;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $GatewayARN
 * @property int<0, 23>|null $HourOfDay
 * @property int<0, 59>|null $MinuteOfHour
 * @property int<0, 6>|null $DayOfWeek
 * @property int<1, 28>|null $DayOfMonth
 * @property string|null $Timezone
 * @property Shapes\SoftwareUpdatePreferences|null $SoftwareUpdatePreferences
 */
class DescribeMaintenanceStartTimeResponse extends Response
{
}
