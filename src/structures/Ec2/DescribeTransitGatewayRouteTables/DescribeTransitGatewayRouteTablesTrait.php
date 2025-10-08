<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayRouteTables;

trait DescribeTransitGatewayRouteTablesTrait
{
    /**
     * @param DescribeTransitGatewayRouteTablesRequest $args
     * @return DescribeTransitGatewayRouteTablesResponse
     */
    public function describeTransitGatewayRouteTables(DescribeTransitGatewayRouteTablesRequest $args)
    {
        $result = parent::describeTransitGatewayRouteTables($args->toArray());
        return new DescribeTransitGatewayRouteTablesResponse($result->toArray());
    }
}
