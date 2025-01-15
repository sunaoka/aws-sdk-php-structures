<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkFabricAttributes|null $Fabric
 * @property NetworkEthereumAttributes|null $Ethereum
 */
class NetworkFrameworkAttributes extends Shape
{
    /**
     * @param array{
     *     Fabric?: NetworkFabricAttributes|null,
     *     Ethereum?: NetworkEthereumAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
