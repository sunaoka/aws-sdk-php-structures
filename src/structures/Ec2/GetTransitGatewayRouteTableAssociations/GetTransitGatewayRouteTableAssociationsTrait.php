<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayRouteTableAssociations;

trait GetTransitGatewayRouteTableAssociationsTrait
{
    /**
     * @param GetTransitGatewayRouteTableAssociationsRequest $args
     * @return GetTransitGatewayRouteTableAssociationsResponse
     */
    public function getTransitGatewayRouteTableAssociations(GetTransitGatewayRouteTableAssociationsRequest $args)
    {
        $result = parent::getTransitGatewayRouteTableAssociations($args->toArray());
        return new GetTransitGatewayRouteTableAssociationsResponse($result->toArray());
    }
}
