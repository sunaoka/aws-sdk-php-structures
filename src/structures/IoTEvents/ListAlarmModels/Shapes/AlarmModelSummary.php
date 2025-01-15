<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListAlarmModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $alarmModelDescription
 * @property string|null $alarmModelName
 */
class AlarmModelSummary extends Shape
{
    /**
     * @param array{
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     alarmModelDescription?: string|null,
     *     alarmModelName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
