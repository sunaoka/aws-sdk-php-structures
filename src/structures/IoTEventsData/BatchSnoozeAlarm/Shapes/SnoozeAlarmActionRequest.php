<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchSnoozeAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $requestId
 * @property string $alarmModelName
 * @property string $keyValue
 * @property string $note
 * @property int $snoozeDuration
 */
class SnoozeAlarmActionRequest extends Shape
{
    /**
     * @param array{
     *     requestId: string,
     *     alarmModelName: string,
     *     keyValue?: string,
     *     note?: string,
     *     snoozeDuration: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
