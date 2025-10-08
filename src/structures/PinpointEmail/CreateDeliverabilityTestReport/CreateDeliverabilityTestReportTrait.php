<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateDeliverabilityTestReport;

trait CreateDeliverabilityTestReportTrait
{
    /**
     * @param CreateDeliverabilityTestReportRequest $args
     * @return CreateDeliverabilityTestReportResponse
     */
    public function createDeliverabilityTestReport(CreateDeliverabilityTestReportRequest $args)
    {
        $result = parent::createDeliverabilityTestReport($args->toArray());
        return new CreateDeliverabilityTestReportResponse($result->toArray());
    }
}
