<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotRecommendation;

trait DescribeBotRecommendationTrait
{
    /**
     * @param DescribeBotRecommendationRequest $args
     * @return DescribeBotRecommendationResponse
     */
    public function describeBotRecommendation(DescribeBotRecommendationRequest $args)
    {
        $result = parent::describeBotRecommendation($args->toArray());
        return new DescribeBotRecommendationResponse($result->toArray());
    }
}
