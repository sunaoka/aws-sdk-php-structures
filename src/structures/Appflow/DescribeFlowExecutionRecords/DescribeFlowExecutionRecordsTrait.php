<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlowExecutionRecords;

trait DescribeFlowExecutionRecordsTrait
{
    /**
     * @param DescribeFlowExecutionRecordsRequest $args
     * @return DescribeFlowExecutionRecordsResponse
     */
    public function describeFlowExecutionRecords(DescribeFlowExecutionRecordsRequest $args)
    {
        $result = parent::describeFlowExecutionRecords($args->toArray());
        return new DescribeFlowExecutionRecordsResponse($result->toArray());
    }
}
