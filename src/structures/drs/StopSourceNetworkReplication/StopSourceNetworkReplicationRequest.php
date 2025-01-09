<?php

namespace Sunaoka\Aws\Structures\drs\StopSourceNetworkReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceNetworkID
 */
class StopSourceNetworkReplicationRequest extends Request
{
    /**
     * @param array{sourceNetworkID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
