<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGatewayVirtualInterfaceGroups;

trait DescribeLocalGatewayVirtualInterfaceGroupsTrait
{
    /**
     * @param DescribeLocalGatewayVirtualInterfaceGroupsRequest $args
     * @return DescribeLocalGatewayVirtualInterfaceGroupsResponse
     */
    public function describeLocalGatewayVirtualInterfaceGroups(DescribeLocalGatewayVirtualInterfaceGroupsRequest $args)
    {
        $result = parent::describeLocalGatewayVirtualInterfaceGroups($args->toArray());
        return new DescribeLocalGatewayVirtualInterfaceGroupsResponse($result->toArray());
    }
}
