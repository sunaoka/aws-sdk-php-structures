<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HttpEndpoint
 * @property string $WebSocketEndpoint
 */
class NodeEthereumAttributes extends Shape
{
    /**
     * @param array{
     *     HttpEndpoint?: string,
     *     WebSocketEndpoint?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
