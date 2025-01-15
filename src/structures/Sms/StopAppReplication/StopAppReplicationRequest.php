<?php

namespace Sunaoka\Aws\Structures\Sms\StopAppReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $appId
 */
class StopAppReplicationRequest extends Request
{
    /**
     * @param array{appId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
