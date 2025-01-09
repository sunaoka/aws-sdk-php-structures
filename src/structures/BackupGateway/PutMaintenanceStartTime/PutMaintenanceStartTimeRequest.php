<?php

namespace Sunaoka\Aws\Structures\BackupGateway\PutMaintenanceStartTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $DayOfMonth
 * @property int $DayOfWeek
 * @property string $GatewayArn
 * @property int $HourOfDay
 * @property int $MinuteOfHour
 */
class PutMaintenanceStartTimeRequest extends Request
{
    /**
     * @param array{
     *     DayOfMonth?: int,
     *     DayOfWeek?: int,
     *     GatewayArn: string,
     *     HourOfDay: int,
     *     MinuteOfHour: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
