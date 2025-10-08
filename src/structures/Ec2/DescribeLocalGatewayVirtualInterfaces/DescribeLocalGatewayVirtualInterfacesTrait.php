<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGatewayVirtualInterfaces;

trait DescribeLocalGatewayVirtualInterfacesTrait
{
    /**
     * @param DescribeLocalGatewayVirtualInterfacesRequest $args
     * @return DescribeLocalGatewayVirtualInterfacesResponse
     */
    public function describeLocalGatewayVirtualInterfaces(DescribeLocalGatewayVirtualInterfacesRequest $args)
    {
        $result = parent::describeLocalGatewayVirtualInterfaces($args->toArray());
        return new DescribeLocalGatewayVirtualInterfacesResponse($result->toArray());
    }
}
