<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $alarmModelName
 * @property string|null $alarmModelVersion
 * @property string|null $keyValue
 * @property AlarmState|null $alarmState
 * @property int<0, 2147483647>|null $severity
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 */
class Alarm extends Shape
{
    /**
     * @param array{
     *     alarmModelName?: string|null,
     *     alarmModelVersion?: string|null,
     *     keyValue?: string|null,
     *     alarmState?: AlarmState|null,
     *     severity?: int<0, 2147483647>|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
