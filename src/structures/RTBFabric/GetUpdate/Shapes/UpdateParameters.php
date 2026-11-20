<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponderGatewayConfigParameters|null $responderGatewayConfig
 * @property LinkConfigParameters|null $linkConfig
 * @property LinkFlowParameters|null $linkFlow
 * @property RoutingRuleParameters|null $routingRule
 */
class UpdateParameters extends Shape
{
    /**
     * @param array{
     *     responderGatewayConfig?: ResponderGatewayConfigParameters|null,
     *     linkConfig?: LinkConfigParameters|null,
     *     linkFlow?: LinkFlowParameters|null,
     *     routingRule?: RoutingRuleParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
