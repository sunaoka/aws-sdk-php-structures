<?php

namespace Sunaoka\Aws\Structures\KendraRanking\DescribeRescoreExecutionPlan;

trait DescribeRescoreExecutionPlanTrait
{
    /**
     * @param DescribeRescoreExecutionPlanRequest $args
     * @return DescribeRescoreExecutionPlanResponse
     */
    public function describeRescoreExecutionPlan(DescribeRescoreExecutionPlanRequest $args)
    {
        $result = parent::describeRescoreExecutionPlan($args->toArray());
        return new DescribeRescoreExecutionPlanResponse($result->toArray());
    }
}
