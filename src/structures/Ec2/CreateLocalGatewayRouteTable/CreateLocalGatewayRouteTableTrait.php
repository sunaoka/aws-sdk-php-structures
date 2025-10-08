<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLocalGatewayRouteTable;

trait CreateLocalGatewayRouteTableTrait
{
    /**
     * @param CreateLocalGatewayRouteTableRequest $args
     * @return CreateLocalGatewayRouteTableResponse
     */
    public function createLocalGatewayRouteTable(CreateLocalGatewayRouteTableRequest $args)
    {
        $result = parent::createLocalGatewayRouteTable($args->toArray());
        return new CreateLocalGatewayRouteTableResponse($result->toArray());
    }
}
