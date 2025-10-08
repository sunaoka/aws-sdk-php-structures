<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBProxyEndpoints;

trait DescribeDBProxyEndpointsTrait
{
    /**
     * @param DescribeDBProxyEndpointsRequest $args
     * @return DescribeDBProxyEndpointsResponse
     */
    public function describeDBProxyEndpoints(DescribeDBProxyEndpointsRequest $args)
    {
        $result = parent::describeDBProxyEndpoints($args->toArray());
        return new DescribeDBProxyEndpointsResponse($result->toArray());
    }
}
