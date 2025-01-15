<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessLog|null $accessLog
 */
class Logging extends Shape
{
    /**
     * @param array{accessLog?: AccessLog|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
