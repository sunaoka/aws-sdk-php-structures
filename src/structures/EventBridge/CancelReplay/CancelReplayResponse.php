<?php

namespace Sunaoka\Aws\Structures\EventBridge\CancelReplay;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ReplayArn
 * @property 'STARTING'|'RUNNING'|'CANCELLING'|'COMPLETED'|'CANCELLED'|'FAILED'|null $State
 * @property string|null $StateReason
 */
class CancelReplayResponse extends Response
{
}
