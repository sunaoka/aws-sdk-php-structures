<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRouteServerEndpoints;

trait DescribeRouteServerEndpointsTrait
{
    /**
     * @param DescribeRouteServerEndpointsRequest $args
     * @return DescribeRouteServerEndpointsResponse
     */
    public function describeRouteServerEndpoints(DescribeRouteServerEndpointsRequest $args)
    {
        $result = parent::describeRouteServerEndpoints($args->toArray());
        return new DescribeRouteServerEndpointsResponse($result->toArray());
    }
}
