<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\UpdateScheduledReport;

trait UpdateScheduledReportTrait
{
    /**
     * @param UpdateScheduledReportRequest $args
     * @return UpdateScheduledReportResponse
     */
    public function updateScheduledReport(UpdateScheduledReportRequest $args)
    {
        $result = parent::updateScheduledReport($args->toArray());
        return new UpdateScheduledReportResponse($result->toArray());
    }
}
