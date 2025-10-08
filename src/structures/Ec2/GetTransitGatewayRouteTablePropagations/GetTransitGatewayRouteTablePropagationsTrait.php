<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayRouteTablePropagations;

trait GetTransitGatewayRouteTablePropagationsTrait
{
    /**
     * @param GetTransitGatewayRouteTablePropagationsRequest $args
     * @return GetTransitGatewayRouteTablePropagationsResponse
     */
    public function getTransitGatewayRouteTablePropagations(GetTransitGatewayRouteTablePropagationsRequest $args)
    {
        $result = parent::getTransitGatewayRouteTablePropagations($args->toArray());
        return new GetTransitGatewayRouteTablePropagationsResponse($result->toArray());
    }
}
