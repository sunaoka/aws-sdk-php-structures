<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PeerEndpoint
 * @property string $PeerEventEndpoint
 */
class NodeFabricAttributes extends Shape
{
    /**
     * @param array{
     *     PeerEndpoint?: string,
     *     PeerEventEndpoint?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
