<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $exact
 */
class HttpGatewayRoutePathRewrite extends Shape
{
    /**
     * @param array{exact?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
