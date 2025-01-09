<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChainId
 */
class NetworkEthereumAttributes extends Shape
{
    /**
     * @param array{ChainId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
