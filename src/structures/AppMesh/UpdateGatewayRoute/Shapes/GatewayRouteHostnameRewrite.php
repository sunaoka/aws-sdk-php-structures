<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $defaultTargetHostname
 */
class GatewayRouteHostnameRewrite extends Shape
{
    /**
     * @param array{defaultTargetHostname?: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
