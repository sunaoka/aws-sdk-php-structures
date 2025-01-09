<?php

namespace Sunaoka\Aws\Structures\drs\StopReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceServerID
 */
class StopReplicationRequest extends Request
{
    /**
     * @param array{sourceServerID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
