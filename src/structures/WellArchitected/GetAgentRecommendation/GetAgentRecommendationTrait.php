<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentRecommendation;

trait GetAgentRecommendationTrait
{
    /**
     * @param GetAgentRecommendationRequest $args
     * @return GetAgentRecommendationResponse
     */
    public function getAgentRecommendation(GetAgentRecommendationRequest $args)
    {
        $result = parent::getAgentRecommendation($args->toArray());
        return new GetAgentRecommendationResponse($result->toArray());
    }
}
