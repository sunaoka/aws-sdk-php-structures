<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeVirtualInterfaces;

trait DescribeVirtualInterfacesTrait
{
    /**
     * @param DescribeVirtualInterfacesRequest $args
     * @return DescribeVirtualInterfacesResponse
     */
    public function describeVirtualInterfaces(DescribeVirtualInterfacesRequest $args)
    {
        $result = parent::describeVirtualInterfaces($args->toArray());
        return new DescribeVirtualInterfacesResponse($result->toArray());
    }
}
