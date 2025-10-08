<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetRecommendationReportDetails;

trait GetRecommendationReportDetailsTrait
{
    /**
     * @param GetRecommendationReportDetailsRequest $args
     * @return GetRecommendationReportDetailsResponse
     */
    public function getRecommendationReportDetails(GetRecommendationReportDetailsRequest $args)
    {
        $result = parent::getRecommendationReportDetails($args->toArray());
        return new GetRecommendationReportDetailsResponse($result->toArray());
    }
}
