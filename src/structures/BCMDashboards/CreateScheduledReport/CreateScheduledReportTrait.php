<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\CreateScheduledReport;

trait CreateScheduledReportTrait
{
    /**
     * @param CreateScheduledReportRequest $args
     * @return CreateScheduledReportResponse
     */
    public function createScheduledReport(CreateScheduledReportRequest $args)
    {
        $result = parent::createScheduledReport($args->toArray());
        return new CreateScheduledReportResponse($result->toArray());
    }
}
