<?php

namespace Sunaoka\Aws\Structures\PI\CreatePerformanceAnalysisReport;

trait CreatePerformanceAnalysisReportTrait
{
    /**
     * @param CreatePerformanceAnalysisReportRequest $args
     * @return CreatePerformanceAnalysisReportResponse
     */
    public function createPerformanceAnalysisReport(CreatePerformanceAnalysisReportRequest $args)
    {
        $result = parent::createPerformanceAnalysisReport($args->toArray());
        return new CreatePerformanceAnalysisReportResponse($result->toArray());
    }
}
