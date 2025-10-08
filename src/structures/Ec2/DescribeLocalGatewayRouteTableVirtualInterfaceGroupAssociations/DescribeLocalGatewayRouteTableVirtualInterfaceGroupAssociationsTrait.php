<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociations;

trait DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociationsTrait
{
    /**
     * @param DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociationsRequest $args
     * @return DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociationsResponse
     */
    public function describeLocalGatewayRouteTableVirtualInterfaceGroupAssociations(
        DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociationsRequest $args,
    ) {
        $result = parent::describeLocalGatewayRouteTableVirtualInterfaceGroupAssociations($args->toArray());
        return new DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociationsResponse($result->toArray());
    }
}
