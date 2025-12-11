<?php

namespace Sunaoka\Aws\Structures\Lambda\SendDurableExecutionCallbackHeartbeat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CallbackId
 */
class SendDurableExecutionCallbackHeartbeatRequest extends Request
{
    /**
     * @param array{CallbackId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
