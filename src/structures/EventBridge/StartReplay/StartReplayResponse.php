<?php

namespace Sunaoka\Aws\Structures\EventBridge\StartReplay;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ReplayArn
 * @property 'STARTING'|'RUNNING'|'CANCELLING'|'COMPLETED'|'CANCELLED'|'FAILED' $State
 * @property string $StateReason
 * @property \Aws\Api\DateTimeResult $ReplayStartTime
 */
class StartReplayResponse extends Response
{
}
