<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetDeviceFleetReport;

trait GetDeviceFleetReportTrait
{
    /**
     * @param GetDeviceFleetReportRequest $args
     * @return GetDeviceFleetReportResponse
     */
    public function getDeviceFleetReport(GetDeviceFleetReportRequest $args)
    {
        $result = parent::getDeviceFleetReport($args->toArray());
        return new GetDeviceFleetReportResponse($result->toArray());
    }
}
