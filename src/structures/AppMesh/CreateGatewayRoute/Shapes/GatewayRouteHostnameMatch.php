<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $exact
 * @property string $suffix
 */
class GatewayRouteHostnameMatch extends Shape
{
    /**
     * @param array{
     *     exact?: string,
     *     suffix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
