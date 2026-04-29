<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StaticRoute|null $staticRoute
 * @property WeightedRoute|null $weightedRoute
 */
class RouteToTargetAction extends Shape
{
    /**
     * @param array{
     *     staticRoute?: StaticRoute|null,
     *     weightedRoute?: WeightedRoute|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
