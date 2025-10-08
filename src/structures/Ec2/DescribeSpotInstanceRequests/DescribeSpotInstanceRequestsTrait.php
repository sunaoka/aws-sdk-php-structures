<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotInstanceRequests;

trait DescribeSpotInstanceRequestsTrait
{
    /**
     * @param DescribeSpotInstanceRequestsRequest $args
     * @return DescribeSpotInstanceRequestsResponse
     */
    public function describeSpotInstanceRequests(DescribeSpotInstanceRequestsRequest $args)
    {
        $result = parent::describeSpotInstanceRequests($args->toArray());
        return new DescribeSpotInstanceRequestsResponse($result->toArray());
    }
}
