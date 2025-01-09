<?php

namespace Sunaoka\Aws\Structures\BackupGateway\PutMaintenanceStartTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 31> $DayOfMonth
 * @property int<0, 6> $DayOfWeek
 * @property string $GatewayArn
 * @property int<0, 23> $HourOfDay
 * @property int<0, 59> $MinuteOfHour
 */
class PutMaintenanceStartTimeRequest extends Request
{
    /**
     * @param array{
     *     DayOfMonth?: int<1, 31>,
     *     DayOfWeek?: int<0, 6>,
     *     GatewayArn: string,
     *     HourOfDay: int<0, 23>,
     *     MinuteOfHour: int<0, 59>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
