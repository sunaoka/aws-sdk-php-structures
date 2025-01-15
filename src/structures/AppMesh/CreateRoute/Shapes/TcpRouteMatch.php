<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535>|null $port
 */
class TcpRouteMatch extends Shape
{
    /**
     * @param array{port?: int<1, 65535>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
