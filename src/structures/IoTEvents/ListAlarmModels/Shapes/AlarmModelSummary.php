<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListAlarmModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $alarmModelDescription
 * @property string $alarmModelName
 */
class AlarmModelSummary extends Shape
{
    /**
     * @param array{
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     alarmModelDescription?: string,
     *     alarmModelName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
