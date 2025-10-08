<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetDeliverabilityTestReport;

trait GetDeliverabilityTestReportTrait
{
    /**
     * @param GetDeliverabilityTestReportRequest $args
     * @return GetDeliverabilityTestReportResponse
     */
    public function getDeliverabilityTestReport(GetDeliverabilityTestReportRequest $args)
    {
        $result = parent::getDeliverabilityTestReport($args->toArray());
        return new GetDeliverabilityTestReportResponse($result->toArray());
    }
}
