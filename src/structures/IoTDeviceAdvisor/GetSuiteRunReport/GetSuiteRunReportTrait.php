<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetSuiteRunReport;

trait GetSuiteRunReportTrait
{
    /**
     * @param GetSuiteRunReportRequest $args
     * @return GetSuiteRunReportResponse
     */
    public function getSuiteRunReport(GetSuiteRunReportRequest $args)
    {
        $result = parent::getSuiteRunReport($args->toArray());
        return new GetSuiteRunReportResponse($result->toArray());
    }
}
