<?php

namespace Sunaoka\Aws\Structures\BillingConductor\GetBillingGroupCostReport;

trait GetBillingGroupCostReportTrait
{
    /**
     * @param GetBillingGroupCostReportRequest $args
     * @return GetBillingGroupCostReportResponse
     */
    public function getBillingGroupCostReport(GetBillingGroupCostReportRequest $args)
    {
        $result = parent::getBillingGroupCostReport($args->toArray());
        return new GetBillingGroupCostReportResponse($result->toArray());
    }
}
