<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\ListAlarms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $alarmModelName
 * @property string $alarmModelVersion
 * @property string $keyValue
 * @property 'DISABLED'|'NORMAL'|'ACTIVE'|'ACKNOWLEDGED'|'SNOOZE_DISABLED'|'LATCHED' $stateName
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 */
class AlarmSummary extends Shape
{
    /**
     * @param array{
     *     alarmModelName?: string,
     *     alarmModelVersion?: string,
     *     keyValue?: string,
     *     stateName?: 'DISABLED'|'NORMAL'|'ACTIVE'|'ACKNOWLEDGED'|'SNOOZE_DISABLED'|'LATCHED',
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
