<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateMaintenanceStartTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property int $HourOfDay
 * @property int $MinuteOfHour
 * @property int $DayOfWeek
 * @property int $DayOfMonth
 * @property Shapes\SoftwareUpdatePreferences $SoftwareUpdatePreferences
 */
class UpdateMaintenanceStartTimeRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     HourOfDay?: int,
     *     MinuteOfHour?: int,
     *     DayOfWeek?: int,
     *     DayOfMonth?: int,
     *     SoftwareUpdatePreferences?: Shapes\SoftwareUpdatePreferences
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
