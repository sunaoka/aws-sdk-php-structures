<?php

namespace Sunaoka\Aws\Structures\drs\StartSourceNetworkReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceNetworkID
 */
class StartSourceNetworkReplicationRequest extends Request
{
    /**
     * @param array{sourceNetworkID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
