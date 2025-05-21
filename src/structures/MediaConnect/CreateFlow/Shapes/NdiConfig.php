<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $NdiState
 * @property string|null $MachineName
 * @property list<NdiDiscoveryServerConfig>|null $NdiDiscoveryServers
 */
class NdiConfig extends Shape
{
    /**
     * @param array{
     *     NdiState?: 'ENABLED'|'DISABLED'|null,
     *     MachineName?: string|null,
     *     NdiDiscoveryServers?: list<NdiDiscoveryServerConfig>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
