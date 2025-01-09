<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkFabricAttributes $Fabric
 * @property NetworkEthereumAttributes $Ethereum
 */
class NetworkFrameworkAttributes extends Shape
{
    /**
     * @param array{
     *     Fabric?: NetworkFabricAttributes,
     *     Ethereum?: NetworkEthereumAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
