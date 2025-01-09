<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchDisableAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $requestId
 * @property string $alarmModelName
 * @property string $keyValue
 * @property string $note
 */
class DisableAlarmActionRequest extends Shape
{
    /**
     * @param array{
     *     requestId: string,
     *     alarmModelName: string,
     *     keyValue?: string,
     *     note?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
