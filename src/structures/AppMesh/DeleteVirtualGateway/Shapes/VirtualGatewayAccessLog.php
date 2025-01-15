<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayFileAccessLog|null $file
 */
class VirtualGatewayAccessLog extends Shape
{
    /**
     * @param array{file?: VirtualGatewayFileAccessLog|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
