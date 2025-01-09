<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateAlarmModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $alarmModelArn
 * @property string $alarmModelVersion
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property 'ACTIVE'|'ACTIVATING'|'INACTIVE'|'FAILED' $status
 */
class UpdateAlarmModelResponse extends Response
{
}
