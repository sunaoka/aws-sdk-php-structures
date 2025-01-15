<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HttpEndpoint
 * @property string|null $WebSocketEndpoint
 */
class NodeEthereumAttributes extends Shape
{
    /**
     * @param array{
     *     HttpEndpoint?: string|null,
     *     WebSocketEndpoint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
