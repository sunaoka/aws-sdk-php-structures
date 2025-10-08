<?php

namespace Sunaoka\Aws\Structures\PI\ListPerformanceAnalysisReports;

trait ListPerformanceAnalysisReportsTrait
{
    /**
     * @param ListPerformanceAnalysisReportsRequest $args
     * @return ListPerformanceAnalysisReportsResponse
     */
    public function listPerformanceAnalysisReports(ListPerformanceAnalysisReportsRequest $args)
    {
        $result = parent::listPerformanceAnalysisReports($args->toArray());
        return new ListPerformanceAnalysisReportsResponse($result->toArray());
    }
}
