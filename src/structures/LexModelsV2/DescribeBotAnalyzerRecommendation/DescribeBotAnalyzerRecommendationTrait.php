<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotAnalyzerRecommendation;

trait DescribeBotAnalyzerRecommendationTrait
{
    /**
     * @param DescribeBotAnalyzerRecommendationRequest $args
     * @return DescribeBotAnalyzerRecommendationResponse
     */
    public function describeBotAnalyzerRecommendation(DescribeBotAnalyzerRecommendationRequest $args)
    {
        $result = parent::describeBotAnalyzerRecommendation($args->toArray());
        return new DescribeBotAnalyzerRecommendationResponse($result->toArray());
    }
}
