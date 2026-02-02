<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchToggleUserSuspendStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $message
 * @property list<Shapes\BatchUserSuccessResponseItem>|null $successful
 * @property list<Shapes\BatchUserErrorResponseItem>|null $failed
 */
class BatchToggleUserSuspendStatusResponse extends Response
{
}
