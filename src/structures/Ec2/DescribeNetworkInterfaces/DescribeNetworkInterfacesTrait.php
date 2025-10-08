<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfaces;

trait DescribeNetworkInterfacesTrait
{
    /**
     * @param DescribeNetworkInterfacesRequest $args
     * @return DescribeNetworkInterfacesResponse
     */
    public function describeNetworkInterfaces(DescribeNetworkInterfacesRequest $args)
    {
        $result = parent::describeNetworkInterfaces($args->toArray());
        return new DescribeNetworkInterfacesResponse($result->toArray());
    }
}
