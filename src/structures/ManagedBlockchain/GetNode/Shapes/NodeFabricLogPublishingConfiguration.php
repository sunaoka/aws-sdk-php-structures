<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LogConfigurations $ChaincodeLogs
 * @property LogConfigurations $PeerLogs
 */
class NodeFabricLogPublishingConfiguration extends Shape
{
    /**
     * @param array{
     *     ChaincodeLogs?: LogConfigurations,
     *     PeerLogs?: LogConfigurations
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
