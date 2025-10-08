<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGatewayRouteTableVpcAssociations;

trait DescribeLocalGatewayRouteTableVpcAssociationsTrait
{
    /**
     * @param DescribeLocalGatewayRouteTableVpcAssociationsRequest $args
     * @return DescribeLocalGatewayRouteTableVpcAssociationsResponse
     */
    public function describeLocalGatewayRouteTableVpcAssociations(DescribeLocalGatewayRouteTableVpcAssociationsRequest $args)
    {
        $result = parent::describeLocalGatewayRouteTableVpcAssociations($args->toArray());
        return new DescribeLocalGatewayRouteTableVpcAssociationsResponse($result->toArray());
    }
}
