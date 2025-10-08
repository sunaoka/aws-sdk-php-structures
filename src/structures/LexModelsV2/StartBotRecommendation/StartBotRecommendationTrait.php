<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartBotRecommendation;

trait StartBotRecommendationTrait
{
    /**
     * @param StartBotRecommendationRequest $args
     * @return StartBotRecommendationResponse
     */
    public function startBotRecommendation(StartBotRecommendationRequest $args)
    {
        $result = parent::startBotRecommendation($args->toArray());
        return new StartBotRecommendationResponse($result->toArray());
    }
}
