<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequests;

trait DescribeSpotFleetRequestsTrait
{
    /**
     * @param DescribeSpotFleetRequestsRequest $args
     * @return DescribeSpotFleetRequestsResponse
     */
    public function describeSpotFleetRequests(DescribeSpotFleetRequestsRequest $args)
    {
        $result = parent::describeSpotFleetRequests($args->toArray());
        return new DescribeSpotFleetRequestsResponse($result->toArray());
    }
}
