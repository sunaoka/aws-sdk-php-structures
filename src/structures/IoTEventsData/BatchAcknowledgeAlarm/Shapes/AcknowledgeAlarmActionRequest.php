<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchAcknowledgeAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $requestId
 * @property string $alarmModelName
 * @property string|null $keyValue
 * @property string|null $note
 */
class AcknowledgeAlarmActionRequest extends Shape
{
    /**
     * @param array{
     *     requestId: string,
     *     alarmModelName: string,
     *     keyValue?: string|null,
     *     note?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
