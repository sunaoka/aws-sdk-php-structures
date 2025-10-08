<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeServiceLinkVirtualInterfaces;

trait DescribeServiceLinkVirtualInterfacesTrait
{
    /**
     * @param DescribeServiceLinkVirtualInterfacesRequest $args
     * @return DescribeServiceLinkVirtualInterfacesResponse
     */
    public function describeServiceLinkVirtualInterfaces(DescribeServiceLinkVirtualInterfacesRequest $args)
    {
        $result = parent::describeServiceLinkVirtualInterfaces($args->toArray());
        return new DescribeServiceLinkVirtualInterfacesResponse($result->toArray());
    }
}
