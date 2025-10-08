<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFlowLogs;

trait DescribeFlowLogsTrait
{
    /**
     * @param DescribeFlowLogsRequest $args
     * @return DescribeFlowLogsResponse
     */
    public function describeFlowLogs(DescribeFlowLogsRequest $args)
    {
        $result = parent::describeFlowLogs($args->toArray());
        return new DescribeFlowLogsResponse($result->toArray());
    }
}
