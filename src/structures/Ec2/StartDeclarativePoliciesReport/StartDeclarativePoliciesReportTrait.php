<?php

namespace Sunaoka\Aws\Structures\Ec2\StartDeclarativePoliciesReport;

trait StartDeclarativePoliciesReportTrait
{
    /**
     * @param StartDeclarativePoliciesReportRequest $args
     * @return StartDeclarativePoliciesReportResponse
     */
    public function startDeclarativePoliciesReport(StartDeclarativePoliciesReportRequest $args)
    {
        $result = parent::startDeclarativePoliciesReport($args->toArray());
        return new StartDeclarativePoliciesReportResponse($result->toArray());
    }
}
