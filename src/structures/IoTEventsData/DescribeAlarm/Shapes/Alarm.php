<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $alarmModelName
 * @property string $alarmModelVersion
 * @property string $keyValue
 * @property AlarmState $alarmState
 * @property int<0, 2147483647> $severity
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 */
class Alarm extends Shape
{
    /**
     * @param array{
     *     alarmModelName?: string,
     *     alarmModelVersion?: string,
     *     keyValue?: string,
     *     alarmState?: AlarmState,
     *     severity?: int<0, 2147483647>,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
