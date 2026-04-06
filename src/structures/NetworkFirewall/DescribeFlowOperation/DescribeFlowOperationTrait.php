<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFlowOperation;

trait DescribeFlowOperationTrait
{
    /**
     * @param DescribeFlowOperationRequest $args
     * @return DescribeFlowOperationResponse
     */
    public function describeFlowOperation(DescribeFlowOperationRequest $args)
    {
        $result = parent::describeFlowOperation($args->toArray());
        return new DescribeFlowOperationResponse($result->toArray());
    }
}
