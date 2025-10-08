<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackSetOperation;

trait DescribeStackSetOperationTrait
{
    /**
     * @param DescribeStackSetOperationRequest $args
     * @return DescribeStackSetOperationResponse
     */
    public function describeStackSetOperation(DescribeStackSetOperationRequest $args)
    {
        $result = parent::describeStackSetOperation($args->toArray());
        return new DescribeStackSetOperationResponse($result->toArray());
    }
}
