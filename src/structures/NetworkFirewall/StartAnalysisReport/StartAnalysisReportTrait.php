<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\StartAnalysisReport;

trait StartAnalysisReportTrait
{
    /**
     * @param StartAnalysisReportRequest $args
     * @return StartAnalysisReportResponse
     */
    public function startAnalysisReport(StartAnalysisReportRequest $args)
    {
        $result = parent::startAnalysisReport($args->toArray());
        return new StartAnalysisReportResponse($result->toArray());
    }
}
