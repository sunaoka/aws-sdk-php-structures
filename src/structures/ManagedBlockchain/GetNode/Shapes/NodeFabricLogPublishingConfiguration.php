<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LogConfigurations|null $ChaincodeLogs
 * @property LogConfigurations|null $PeerLogs
 */
class NodeFabricLogPublishingConfiguration extends Shape
{
    /**
     * @param array{
     *     ChaincodeLogs?: LogConfigurations|null,
     *     PeerLogs?: LogConfigurations|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
