<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGatewayRouteTables;

trait DescribeLocalGatewayRouteTablesTrait
{
    /**
     * @param DescribeLocalGatewayRouteTablesRequest $args
     * @return DescribeLocalGatewayRouteTablesResponse
     */
    public function describeLocalGatewayRouteTables(DescribeLocalGatewayRouteTablesRequest $args)
    {
        $result = parent::describeLocalGatewayRouteTables($args->toArray());
        return new DescribeLocalGatewayRouteTablesResponse($result->toArray());
    }
}
