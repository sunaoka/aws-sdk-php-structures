<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteBotAnalyzerRecommendation;

trait DeleteBotAnalyzerRecommendationTrait
{
    /**
     * @param DeleteBotAnalyzerRecommendationRequest $args
     * @return DeleteBotAnalyzerRecommendationResponse
     */
    public function deleteBotAnalyzerRecommendation(DeleteBotAnalyzerRecommendationRequest $args)
    {
        $result = parent::deleteBotAnalyzerRecommendation($args->toArray());
        return new DeleteBotAnalyzerRecommendationResponse($result->toArray());
    }
}
