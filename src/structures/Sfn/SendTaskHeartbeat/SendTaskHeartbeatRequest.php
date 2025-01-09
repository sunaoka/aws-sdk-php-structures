<?php

namespace Sunaoka\Aws\Structures\Sfn\SendTaskHeartbeat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskToken
 */
class SendTaskHeartbeatRequest extends Request
{
    /**
     * @param array{taskToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
