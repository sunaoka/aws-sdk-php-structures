<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWorkflow;

trait DescribeWorkflowTrait
{
    /**
     * @param DescribeWorkflowRequest $args
     * @return DescribeWorkflowResponse
     */
    public function describeWorkflow(DescribeWorkflowRequest $args)
    {
        $result = parent::describeWorkflow($args->toArray());
        return new DescribeWorkflowResponse($result->toArray());
    }
}
