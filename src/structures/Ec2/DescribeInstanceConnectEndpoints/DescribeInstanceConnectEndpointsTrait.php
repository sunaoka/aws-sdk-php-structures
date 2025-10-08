<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceConnectEndpoints;

trait DescribeInstanceConnectEndpointsTrait
{
    /**
     * @param DescribeInstanceConnectEndpointsRequest $args
     * @return DescribeInstanceConnectEndpointsResponse
     */
    public function describeInstanceConnectEndpoints(DescribeInstanceConnectEndpointsRequest $args)
    {
        $result = parent::describeInstanceConnectEndpoints($args->toArray());
        return new DescribeInstanceConnectEndpointsResponse($result->toArray());
    }
}
