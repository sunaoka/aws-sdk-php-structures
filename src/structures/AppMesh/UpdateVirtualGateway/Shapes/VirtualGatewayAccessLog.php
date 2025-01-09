<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayFileAccessLog $file
 */
class VirtualGatewayAccessLog extends Shape
{
    /**
     * @param array{file?: VirtualGatewayFileAccessLog} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
