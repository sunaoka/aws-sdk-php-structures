<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelDeclarativePoliciesReport;

trait CancelDeclarativePoliciesReportTrait
{
    /**
     * @param CancelDeclarativePoliciesReportRequest $args
     * @return CancelDeclarativePoliciesReportResponse
     */
    public function cancelDeclarativePoliciesReport(CancelDeclarativePoliciesReportRequest $args)
    {
        $result = parent::cancelDeclarativePoliciesReport($args->toArray());
        return new CancelDeclarativePoliciesReportResponse($result->toArray());
    }
}
