<?php

namespace Sunaoka\Aws\Structures\WellArchitected\StartAgentRecommendationGeneration;

trait StartAgentRecommendationGenerationTrait
{
    /**
     * @param StartAgentRecommendationGenerationRequest $args
     * @return StartAgentRecommendationGenerationResponse
     */
    public function startAgentRecommendationGeneration(StartAgentRecommendationGenerationRequest $args)
    {
        $result = parent::startAgentRecommendationGeneration($args->toArray());
        return new StartAgentRecommendationGenerationResponse($result->toArray());
    }
}
