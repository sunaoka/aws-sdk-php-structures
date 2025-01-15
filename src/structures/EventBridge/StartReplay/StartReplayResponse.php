<?php

namespace Sunaoka\Aws\Structures\EventBridge\StartReplay;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ReplayArn
 * @property 'STARTING'|'RUNNING'|'CANCELLING'|'COMPLETED'|'CANCELLED'|'FAILED'|null $State
 * @property string|null $StateReason
 * @property \Aws\Api\DateTimeResult|null $ReplayStartTime
 */
class StartReplayResponse extends Response
{
}
