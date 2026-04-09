<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\ListScheduledReports;

trait ListScheduledReportsTrait
{
    /**
     * @param ListScheduledReportsRequest $args
     * @return ListScheduledReportsResponse
     */
    public function listScheduledReports(ListScheduledReportsRequest $args)
    {
        $result = parent::listScheduledReports($args->toArray());
        return new ListScheduledReportsResponse($result->toArray());
    }
}
