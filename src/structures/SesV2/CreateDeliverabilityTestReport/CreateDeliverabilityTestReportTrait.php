<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateDeliverabilityTestReport;

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
