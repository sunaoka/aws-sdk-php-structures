<?php

namespace Sunaoka\Aws\Structures\Swf\DescribeWorkflowType;

trait DescribeWorkflowTypeTrait
{
    /**
     * @param DescribeWorkflowTypeRequest $args
     * @return DescribeWorkflowTypeResponse
     */
    public function describeWorkflowType(DescribeWorkflowTypeRequest $args)
    {
        $result = parent::describeWorkflowType($args->toArray());
        return new DescribeWorkflowTypeResponse($result->toArray());
    }
}
