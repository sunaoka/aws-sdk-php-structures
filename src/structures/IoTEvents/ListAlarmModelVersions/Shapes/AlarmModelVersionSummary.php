<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListAlarmModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $alarmModelName
 * @property string|null $alarmModelArn
 * @property string|null $alarmModelVersion
 * @property string|null $roleArn
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 * @property 'ACTIVE'|'ACTIVATING'|'INACTIVE'|'FAILED'|null $status
 * @property string|null $statusMessage
 */
class AlarmModelVersionSummary extends Shape
{
    /**
     * @param array{
     *     alarmModelName?: string|null,
     *     alarmModelArn?: string|null,
     *     alarmModelVersion?: string|null,
     *     roleArn?: string|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     status?: 'ACTIVE'|'ACTIVATING'|'INACTIVE'|'FAILED'|null,
     *     statusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
