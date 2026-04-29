<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartRecommendation;

trait StartRecommendationTrait
{
    /**
     * @param StartRecommendationRequest $args
     * @return StartRecommendationResponse
     */
    public function startRecommendation(StartRecommendationRequest $args)
    {
        $result = parent::startRecommendation($args->toArray());
        return new StartRecommendationResponse($result->toArray());
    }
}
