<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateMaintenanceStartTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property int<0, 23> $HourOfDay
 * @property int<0, 59> $MinuteOfHour
 * @property int<0, 6> $DayOfWeek
 * @property int<1, 28> $DayOfMonth
 * @property Shapes\SoftwareUpdatePreferences $SoftwareUpdatePreferences
 */
class UpdateMaintenanceStartTimeRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     HourOfDay?: int<0, 23>,
     *     MinuteOfHour?: int<0, 59>,
     *     DayOfWeek?: int<0, 6>,
     *     DayOfMonth?: int<1, 28>,
     *     SoftwareUpdatePreferences?: Shapes\SoftwareUpdatePreferences
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
