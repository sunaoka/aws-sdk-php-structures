<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchSnoozeAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $requestId
 * @property string $alarmModelName
 * @property string|null $keyValue
 * @property string|null $note
 * @property int $snoozeDuration
 */
class SnoozeAlarmActionRequest extends Shape
{
    /**
     * @param array{
     *     requestId: string,
     *     alarmModelName: string,
     *     keyValue?: string|null,
     *     note?: string|null,
     *     snoozeDuration: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
