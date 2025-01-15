<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\ListAlarms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $alarmModelName
 * @property string|null $alarmModelVersion
 * @property string|null $keyValue
 * @property 'DISABLED'|'NORMAL'|'ACTIVE'|'ACKNOWLEDGED'|'SNOOZE_DISABLED'|'LATCHED'|null $stateName
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 */
class AlarmSummary extends Shape
{
    /**
     * @param array{
     *     alarmModelName?: string|null,
     *     alarmModelVersion?: string|null,
     *     keyValue?: string|null,
     *     stateName?: 'DISABLED'|'NORMAL'|'ACTIVE'|'ACKNOWLEDGED'|'SNOOZE_DISABLED'|'LATCHED'|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
