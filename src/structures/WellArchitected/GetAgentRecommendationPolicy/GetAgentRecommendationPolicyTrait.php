<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentRecommendationPolicy;

trait GetAgentRecommendationPolicyTrait
{
    /**
     * @param GetAgentRecommendationPolicyRequest $args
     * @return GetAgentRecommendationPolicyResponse
     */
    public function getAgentRecommendationPolicy(GetAgentRecommendationPolicyRequest $args)
    {
        $result = parent::getAgentRecommendationPolicy($args->toArray());
        return new GetAgentRecommendationPolicyResponse($result->toArray());
    }
}
