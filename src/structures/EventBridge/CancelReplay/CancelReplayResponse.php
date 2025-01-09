<?php

namespace Sunaoka\Aws\Structures\EventBridge\CancelReplay;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ReplayArn
 * @property 'STARTING'|'RUNNING'|'CANCELLING'|'COMPLETED'|'CANCELLED'|'FAILED' $State
 * @property string $StateReason
 */
class CancelReplayResponse extends Response
{
}
