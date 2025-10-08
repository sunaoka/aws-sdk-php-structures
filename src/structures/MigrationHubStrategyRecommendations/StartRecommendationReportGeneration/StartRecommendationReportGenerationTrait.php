<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\StartRecommendationReportGeneration;

trait StartRecommendationReportGenerationTrait
{
    /**
     * @param StartRecommendationReportGenerationRequest $args
     * @return StartRecommendationReportGenerationResponse
     */
    public function startRecommendationReportGeneration(StartRecommendationReportGenerationRequest $args)
    {
        $result = parent::startRecommendationReportGeneration($args->toArray());
        return new StartRecommendationReportGenerationResponse($result->toArray());
    }
}
