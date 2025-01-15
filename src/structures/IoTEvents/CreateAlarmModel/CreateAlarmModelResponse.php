<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateAlarmModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $alarmModelArn
 * @property string|null $alarmModelVersion
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 * @property 'ACTIVE'|'ACTIVATING'|'INACTIVE'|'FAILED'|null $status
 */
class CreateAlarmModelResponse extends Response
{
}
