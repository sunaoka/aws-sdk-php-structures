<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListAnalysisReports;

trait ListAnalysisReportsTrait
{
    /**
     * @param ListAnalysisReportsRequest $args
     * @return ListAnalysisReportsResponse
     */
    public function listAnalysisReports(ListAnalysisReportsRequest $args)
    {
        $result = parent::listAnalysisReports($args->toArray());
        return new ListAnalysisReportsResponse($result->toArray());
    }
}
