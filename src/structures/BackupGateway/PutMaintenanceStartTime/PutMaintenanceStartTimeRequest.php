<?php

namespace Sunaoka\Aws\Structures\BackupGateway\PutMaintenanceStartTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayArn
 * @property int<0, 23> $HourOfDay
 * @property int<0, 59> $MinuteOfHour
 * @property int<0, 6>|null $DayOfWeek
 * @property int<1, 31>|null $DayOfMonth
 */
class PutMaintenanceStartTimeRequest extends Request
{
    /**
     * @param array{
     *     GatewayArn: string,
     *     HourOfDay: int<0, 23>,
     *     MinuteOfHour: int<0, 59>,
     *     DayOfWeek?: int<0, 6>|null,
     *     DayOfMonth?: int<1, 31>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
