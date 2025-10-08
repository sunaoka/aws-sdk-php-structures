<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayRouteTable;

trait CreateTransitGatewayRouteTableTrait
{
    /**
     * @param CreateTransitGatewayRouteTableRequest $args
     * @return CreateTransitGatewayRouteTableResponse
     */
    public function createTransitGatewayRouteTable(CreateTransitGatewayRouteTableRequest $args)
    {
        $result = parent::createTransitGatewayRouteTable($args->toArray());
        return new CreateTransitGatewayRouteTableResponse($result->toArray());
    }
}
