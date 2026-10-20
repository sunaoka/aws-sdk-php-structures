<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GatewayRouteAlbResources>|null $hostSharedAlb
 */
class GatewayRouteResources extends Shape
{
    /**
     * @param array{hostSharedAlb?: list<GatewayRouteAlbResources>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
