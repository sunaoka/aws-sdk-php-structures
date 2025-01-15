<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PeerEndpoint
 * @property string|null $PeerEventEndpoint
 */
class NodeFabricAttributes extends Shape
{
    /**
     * @param array{
     *     PeerEndpoint?: string|null,
     *     PeerEventEndpoint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
