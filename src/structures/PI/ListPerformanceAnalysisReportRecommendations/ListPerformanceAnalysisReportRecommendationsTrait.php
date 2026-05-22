<?php

namespace Sunaoka\Aws\Structures\PI\ListPerformanceAnalysisReportRecommendations;

trait ListPerformanceAnalysisReportRecommendationsTrait
{
    /**
     * @param ListPerformanceAnalysisReportRecommendationsRequest $args
     * @return ListPerformanceAnalysisReportRecommendationsResponse
     */
    public function listPerformanceAnalysisReportRecommendations(ListPerformanceAnalysisReportRecommendationsRequest $args)
    {
        $result = parent::listPerformanceAnalysisReportRecommendations($args->toArray());
        return new ListPerformanceAnalysisReportRecommendationsResponse($result->toArray());
    }
}
