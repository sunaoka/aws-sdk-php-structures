<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAutomationJob;

trait DescribeAutomationJobTrait
{
    /**
     * @param DescribeAutomationJobRequest $args
     * @return DescribeAutomationJobResponse
     */
    public function describeAutomationJob(DescribeAutomationJobRequest $args)
    {
        $result = parent::describeAutomationJob($args->toArray());
        return new DescribeAutomationJobResponse($result->toArray());
    }
}
