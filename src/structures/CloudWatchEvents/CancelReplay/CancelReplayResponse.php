<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\CancelReplay;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ReplayArn
 * @property 'STARTING'|'RUNNING'|'CANCELLING'|'COMPLETED'|'CANCELLED'|'FAILED' $State
 * @property string $StateReason
 */
class CancelReplayResponse extends Response
{
}
