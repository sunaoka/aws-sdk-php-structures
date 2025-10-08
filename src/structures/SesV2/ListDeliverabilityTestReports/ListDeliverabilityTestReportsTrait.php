<?php

namespace Sunaoka\Aws\Structures\SesV2\ListDeliverabilityTestReports;

trait ListDeliverabilityTestReportsTrait
{
    /**
     * @param ListDeliverabilityTestReportsRequest $args
     * @return ListDeliverabilityTestReportsResponse
     */
    public function listDeliverabilityTestReports(ListDeliverabilityTestReportsRequest $args)
    {
        $result = parent::listDeliverabilityTestReports($args->toArray());
        return new ListDeliverabilityTestReportsResponse($result->toArray());
    }
}
