<?php

namespace Sunaoka\Aws\Structures\Ec2\GetDeclarativePoliciesReportSummary;

trait GetDeclarativePoliciesReportSummaryTrait
{
    /**
     * @param GetDeclarativePoliciesReportSummaryRequest $args
     * @return GetDeclarativePoliciesReportSummaryResponse
     */
    public function getDeclarativePoliciesReportSummary(GetDeclarativePoliciesReportSummaryRequest $args)
    {
        $result = parent::getDeclarativePoliciesReportSummary($args->toArray());
        return new GetDeclarativePoliciesReportSummaryResponse($result->toArray());
    }
}
