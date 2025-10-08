<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotRecommendation;

trait UpdateBotRecommendationTrait
{
    /**
     * @param UpdateBotRecommendationRequest $args
     * @return UpdateBotRecommendationResponse
     */
    public function updateBotRecommendation(UpdateBotRecommendationRequest $args)
    {
        $result = parent::updateBotRecommendation($args->toArray());
        return new UpdateBotRecommendationResponse($result->toArray());
    }
}
