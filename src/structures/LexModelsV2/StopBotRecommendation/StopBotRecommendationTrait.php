<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StopBotRecommendation;

trait StopBotRecommendationTrait
{
    /**
     * @param StopBotRecommendationRequest $args
     * @return StopBotRecommendationResponse
     */
    public function stopBotRecommendation(StopBotRecommendationRequest $args)
    {
        $result = parent::stopBotRecommendation($args->toArray());
        return new StopBotRecommendationResponse($result->toArray());
    }
}
