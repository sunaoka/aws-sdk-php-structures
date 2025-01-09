<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeAlarmModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $alarmModelArn
 * @property string $alarmModelVersion
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property 'ACTIVE'|'ACTIVATING'|'INACTIVE'|'FAILED' $status
 * @property string $statusMessage
 * @property string $alarmModelName
 * @property string $alarmModelDescription
 * @property string $roleArn
 * @property string $key
 * @property int<0, 2147483647> $severity
 * @property Shapes\AlarmRule $alarmRule
 * @property Shapes\AlarmNotification $alarmNotification
 * @property Shapes\AlarmEventActions $alarmEventActions
 * @property Shapes\AlarmCapabilities $alarmCapabilities
 */
class DescribeAlarmModelResponse extends Response
{
}
