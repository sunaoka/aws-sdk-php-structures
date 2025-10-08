<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableTransitGatewayRouteTablePropagation;

trait DisableTransitGatewayRouteTablePropagationTrait
{
    /**
     * @param DisableTransitGatewayRouteTablePropagationRequest $args
     * @return DisableTransitGatewayRouteTablePropagationResponse
     */
    public function disableTransitGatewayRouteTablePropagation(DisableTransitGatewayRouteTablePropagationRequest $args)
    {
        $result = parent::disableTransitGatewayRouteTablePropagation($args->toArray());
        return new DisableTransitGatewayRouteTablePropagationResponse($result->toArray());
    }
}
