<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NodeFabricAttributes|null $Fabric
 * @property NodeEthereumAttributes|null $Ethereum
 */
class NodeFrameworkAttributes extends Shape
{
    /**
     * @param array{
     *     Fabric?: NodeFabricAttributes|null,
     *     Ethereum?: NodeEthereumAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
