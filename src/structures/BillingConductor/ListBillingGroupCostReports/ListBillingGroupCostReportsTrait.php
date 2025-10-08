<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListBillingGroupCostReports;

trait ListBillingGroupCostReportsTrait
{
    /**
     * @param ListBillingGroupCostReportsRequest $args
     * @return ListBillingGroupCostReportsResponse
     */
    public function listBillingGroupCostReports(ListBillingGroupCostReportsRequest $args)
    {
        $result = parent::listBillingGroupCostReports($args->toArray());
        return new ListBillingGroupCostReportsResponse($result->toArray());
    }
}
