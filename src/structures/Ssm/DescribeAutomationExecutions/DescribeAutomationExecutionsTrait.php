<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAutomationExecutions;

trait DescribeAutomationExecutionsTrait
{
    /**
     * @param DescribeAutomationExecutionsRequest $args
     * @return DescribeAutomationExecutionsResponse
     */
    public function describeAutomationExecutions(DescribeAutomationExecutionsRequest $args)
    {
        $result = parent::describeAutomationExecutions($args->toArray());
        return new DescribeAutomationExecutionsResponse($result->toArray());
    }
}
