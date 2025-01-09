<?php

namespace Sunaoka\Aws\Structures\Swf\RecordActivityTaskHeartbeat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskToken
 * @property string $details
 */
class RecordActivityTaskHeartbeatRequest extends Request
{
    /**
     * @param array{
     *     taskToken: string,
     *     details?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
