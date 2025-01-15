<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateMaintenanceStartTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property int<0, 23>|null $HourOfDay
 * @property int<0, 59>|null $MinuteOfHour
 * @property int<0, 6>|null $DayOfWeek
 * @property int<1, 28>|null $DayOfMonth
 * @property Shapes\SoftwareUpdatePreferences|null $SoftwareUpdatePreferences
 */
class UpdateMaintenanceStartTimeRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     HourOfDay?: int<0, 23>|null,
     *     MinuteOfHour?: int<0, 59>|null,
     *     DayOfWeek?: int<0, 6>|null,
     *     DayOfMonth?: int<1, 28>|null,
     *     SoftwareUpdatePreferences?: Shapes\SoftwareUpdatePreferences|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
