<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessEndpoints;

trait DescribeVerifiedAccessEndpointsTrait
{
    /**
     * @param DescribeVerifiedAccessEndpointsRequest $args
     * @return DescribeVerifiedAccessEndpointsResponse
     */
    public function describeVerifiedAccessEndpoints(DescribeVerifiedAccessEndpointsRequest $args)
    {
        $result = parent::describeVerifiedAccessEndpoints($args->toArray());
        return new DescribeVerifiedAccessEndpointsResponse($result->toArray());
    }
}
