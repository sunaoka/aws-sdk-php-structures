<?php

namespace Sunaoka\Aws\Structures\drs\StartReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceServerID
 */
class StartReplicationRequest extends Request
{
    /**
     * @param array{sourceServerID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
