<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeReportPlan;

trait DescribeReportPlanTrait
{
    /**
     * @param DescribeReportPlanRequest $args
     * @return DescribeReportPlanResponse
     */
    public function describeReportPlan(DescribeReportPlanRequest $args)
    {
        $result = parent::describeReportPlan($args->toArray());
        return new DescribeReportPlanResponse($result->toArray());
    }
}
