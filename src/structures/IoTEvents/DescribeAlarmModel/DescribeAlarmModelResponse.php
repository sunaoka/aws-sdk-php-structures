<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeAlarmModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $alarmModelArn
 * @property string|null $alarmModelVersion
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 * @property 'ACTIVE'|'ACTIVATING'|'INACTIVE'|'FAILED'|null $status
 * @property string|null $statusMessage
 * @property string|null $alarmModelName
 * @property string|null $alarmModelDescription
 * @property string|null $roleArn
 * @property string|null $key
 * @property int<0, 2147483647>|null $severity
 * @property Shapes\AlarmRule|null $alarmRule
 * @property Shapes\AlarmNotification|null $alarmNotification
 * @property Shapes\AlarmEventActions|null $alarmEventActions
 * @property Shapes\AlarmCapabilities|null $alarmCapabilities
 */
class DescribeAlarmModelResponse extends Response
{
}
