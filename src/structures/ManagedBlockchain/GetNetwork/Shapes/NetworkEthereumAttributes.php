<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChainId
 */
class NetworkEthereumAttributes extends Shape
{
    /**
     * @param array{ChainId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
