<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\ExecuteScheduledReport;

trait ExecuteScheduledReportTrait
{
    /**
     * @param ExecuteScheduledReportRequest $args
     * @return ExecuteScheduledReportResponse
     */
    public function executeScheduledReport(ExecuteScheduledReportRequest $args)
    {
        $result = parent::executeScheduledReport($args->toArray());
        return new ExecuteScheduledReportResponse($result->toArray());
    }
}
