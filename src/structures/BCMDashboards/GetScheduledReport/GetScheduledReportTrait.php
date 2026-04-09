<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\GetScheduledReport;

trait GetScheduledReportTrait
{
    /**
     * @param GetScheduledReportRequest $args
     * @return GetScheduledReportResponse
     */
    public function getScheduledReport(GetScheduledReportRequest $args)
    {
        $result = parent::getScheduledReport($args->toArray());
        return new GetScheduledReportResponse($result->toArray());
    }
}
