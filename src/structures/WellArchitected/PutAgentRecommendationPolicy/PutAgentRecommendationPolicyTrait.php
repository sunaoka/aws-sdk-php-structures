<?php

namespace Sunaoka\Aws\Structures\WellArchitected\PutAgentRecommendationPolicy;

trait PutAgentRecommendationPolicyTrait
{
    /**
     * @param PutAgentRecommendationPolicyRequest $args
     * @return PutAgentRecommendationPolicyResponse
     */
    public function putAgentRecommendationPolicy(PutAgentRecommendationPolicyRequest $args)
    {
        $result = parent::putAgentRecommendationPolicy($args->toArray());
        return new PutAgentRecommendationPolicyResponse($result->toArray());
    }
}
