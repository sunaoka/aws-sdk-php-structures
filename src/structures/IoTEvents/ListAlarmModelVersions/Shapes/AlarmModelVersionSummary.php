<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListAlarmModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $alarmModelName
 * @property string $alarmModelArn
 * @property string $alarmModelVersion
 * @property string $roleArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property 'ACTIVE'|'ACTIVATING'|'INACTIVE'|'FAILED' $status
 * @property string $statusMessage
 */
class AlarmModelVersionSummary extends Shape
{
    /**
     * @param array{
     *     alarmModelName?: string,
     *     alarmModelArn?: string,
     *     alarmModelVersion?: string,
     *     roleArn?: string,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult,
     *     status?: 'ACTIVE'|'ACTIVATING'|'INACTIVE'|'FAILED',
     *     statusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
