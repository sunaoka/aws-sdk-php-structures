<?php

namespace Sunaoka\Aws\Structures\PI\GetPerformanceAnalysisReport;

trait GetPerformanceAnalysisReportTrait
{
    /**
     * @param GetPerformanceAnalysisReportRequest $args
     * @return GetPerformanceAnalysisReportResponse
     */
    public function getPerformanceAnalysisReport(GetPerformanceAnalysisReportRequest $args)
    {
        $result = parent::getPerformanceAnalysisReport($args->toArray());
        return new GetPerformanceAnalysisReportResponse($result->toArray());
    }
}
