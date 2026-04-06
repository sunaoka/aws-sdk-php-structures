<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateMaintenanceStartTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property int<0, 23> $HourOfDay
 * @property int<0, 59> $MinuteOfHour
 * @property int<0, 6>|null $DayOfWeek
 * @property int<1, 28>|null $DayOfMonth
 */
class UpdateMaintenanceStartTimeRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     HourOfDay: int<0, 23>,
     *     MinuteOfHour: int<0, 59>,
     *     DayOfWeek?: int<0, 6>|null,
     *     DayOfMonth?: int<1, 28>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
