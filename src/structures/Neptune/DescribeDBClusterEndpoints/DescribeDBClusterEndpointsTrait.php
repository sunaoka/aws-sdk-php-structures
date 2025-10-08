<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeDBClusterEndpoints;

trait DescribeDBClusterEndpointsTrait
{
    /**
     * @param DescribeDBClusterEndpointsRequest $args
     * @return DescribeDBClusterEndpointsResponse
     */
    public function describeDBClusterEndpoints(DescribeDBClusterEndpointsRequest $args)
    {
        $result = parent::describeDBClusterEndpoints($args->toArray());
        return new DescribeDBClusterEndpointsResponse($result->toArray());
    }
}
