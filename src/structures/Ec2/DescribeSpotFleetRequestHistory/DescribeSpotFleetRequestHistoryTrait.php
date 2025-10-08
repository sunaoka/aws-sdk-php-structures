<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequestHistory;

trait DescribeSpotFleetRequestHistoryTrait
{
    /**
     * @param DescribeSpotFleetRequestHistoryRequest $args
     * @return DescribeSpotFleetRequestHistoryResponse
     */
    public function describeSpotFleetRequestHistory(DescribeSpotFleetRequestHistoryRequest $args)
    {
        $result = parent::describeSpotFleetRequestHistory($args->toArray());
        return new DescribeSpotFleetRequestHistoryResponse($result->toArray());
    }
}
