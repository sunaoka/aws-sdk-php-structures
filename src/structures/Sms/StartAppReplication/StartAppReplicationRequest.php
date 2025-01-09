<?php

namespace Sunaoka\Aws\Structures\Sms\StartAppReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 */
class StartAppReplicationRequest extends Request
{
    /**
     * @param array{appId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
