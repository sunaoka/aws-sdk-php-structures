<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableTransitGatewayRouteTablePropagation;

trait EnableTransitGatewayRouteTablePropagationTrait
{
    /**
     * @param EnableTransitGatewayRouteTablePropagationRequest $args
     * @return EnableTransitGatewayRouteTablePropagationResponse
     */
    public function enableTransitGatewayRouteTablePropagation(EnableTransitGatewayRouteTablePropagationRequest $args)
    {
        $result = parent::enableTransitGatewayRouteTablePropagation($args->toArray());
        return new EnableTransitGatewayRouteTablePropagationResponse($result->toArray());
    }
}
