<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAutomationStepExecutions;

trait DescribeAutomationStepExecutionsTrait
{
    /**
     * @param DescribeAutomationStepExecutionsRequest $args
     * @return DescribeAutomationStepExecutionsResponse
     */
    public function describeAutomationStepExecutions(DescribeAutomationStepExecutionsRequest $args)
    {
        $result = parent::describeAutomationStepExecutions($args->toArray());
        return new DescribeAutomationStepExecutionsResponse($result->toArray());
    }
}
