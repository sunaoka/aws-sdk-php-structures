<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GatewayElbAccessLogDestination|null $destination
 */
class GatewayElbAccessLogConfiguration extends Shape
{
    /**
     * @param array{destination?: GatewayElbAccessLogDestination|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
