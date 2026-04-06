<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCisScanReport;

trait GetCisScanReportTrait
{
    /**
     * @param GetCisScanReportRequest $args
     * @return GetCisScanReportResponse
     */
    public function getCisScanReport(GetCisScanReportRequest $args)
    {
        $result = parent::getCisScanReport($args->toArray());
        return new GetCisScanReportResponse($result->toArray());
    }
}
