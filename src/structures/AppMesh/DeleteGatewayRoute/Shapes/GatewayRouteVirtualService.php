<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $virtualServiceName
 */
class GatewayRouteVirtualService extends Shape
{
    /**
     * @param array{virtualServiceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
