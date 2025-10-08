<?php

namespace Sunaoka\Aws\Structures\PI\DeletePerformanceAnalysisReport;

trait DeletePerformanceAnalysisReportTrait
{
    /**
     * @param DeletePerformanceAnalysisReportRequest $args
     * @return DeletePerformanceAnalysisReportResponse
     */
    public function deletePerformanceAnalysisReport(DeletePerformanceAnalysisReportRequest $args)
    {
        $result = parent::deletePerformanceAnalysisReport($args->toArray());
        return new DeletePerformanceAnalysisReportResponse($result->toArray());
    }
}
