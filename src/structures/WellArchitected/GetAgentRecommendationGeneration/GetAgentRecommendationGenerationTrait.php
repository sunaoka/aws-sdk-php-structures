<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentRecommendationGeneration;

trait GetAgentRecommendationGenerationTrait
{
    /**
     * @param GetAgentRecommendationGenerationRequest $args
     * @return GetAgentRecommendationGenerationResponse
     */
    public function getAgentRecommendationGeneration(GetAgentRecommendationGenerationRequest $args)
    {
        $result = parent::getAgentRecommendationGeneration($args->toArray());
        return new GetAgentRecommendationGenerationResponse($result->toArray());
    }
}
