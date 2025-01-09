<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NodeFabricAttributes $Fabric
 * @property NodeEthereumAttributes $Ethereum
 */
class NodeFrameworkAttributes extends Shape
{
    /**
     * @param array{
     *     Fabric?: NodeFabricAttributes,
     *     Ethereum?: NodeEthereumAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
