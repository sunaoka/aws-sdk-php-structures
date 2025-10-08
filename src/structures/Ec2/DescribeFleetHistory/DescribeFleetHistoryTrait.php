<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleetHistory;

trait DescribeFleetHistoryTrait
{
    /**
     * @param DescribeFleetHistoryRequest $args
     * @return DescribeFleetHistoryResponse
     */
    public function describeFleetHistory(DescribeFleetHistoryRequest $args)
    {
        $result = parent::describeFleetHistory($args->toArray());
        return new DescribeFleetHistoryResponse($result->toArray());
    }
}
