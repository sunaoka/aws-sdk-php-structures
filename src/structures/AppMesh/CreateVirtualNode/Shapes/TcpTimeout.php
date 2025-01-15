<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Duration|null $idle
 */
class TcpTimeout extends Shape
{
    /**
     * @param array{idle?: Duration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
