<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GatewayTestTrafficHeader|null $header
 */
class GatewayAlbTestTrafficRules extends Shape
{
    /**
     * @param array{header?: GatewayTestTrafficHeader|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
