<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $exact
 * @property string|null $suffix
 */
class GatewayRouteHostnameMatch extends Shape
{
    /**
     * @param array{
     *     exact?: string|null,
     *     suffix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
