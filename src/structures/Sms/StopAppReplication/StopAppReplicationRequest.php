<?php

namespace Sunaoka\Aws\Structures\Sms\StopAppReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 */
class StopAppReplicationRequest extends Request
{
    /**
     * @param array{appId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
