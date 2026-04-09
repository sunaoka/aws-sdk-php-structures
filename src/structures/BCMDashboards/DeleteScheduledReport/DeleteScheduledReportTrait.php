<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\DeleteScheduledReport;

trait DeleteScheduledReportTrait
{
    /**
     * @param DeleteScheduledReportRequest $args
     * @return DeleteScheduledReportResponse
     */
    public function deleteScheduledReport(DeleteScheduledReportRequest $args)
    {
        $result = parent::deleteScheduledReport($args->toArray());
        return new DeleteScheduledReportResponse($result->toArray());
    }
}
