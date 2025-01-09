<?php

namespace Sunaoka\Aws\Structures\drs\RetryDataReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceServerID
 */
class RetryDataReplicationRequest extends Request
{
    /**
     * @param array{sourceServerID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
