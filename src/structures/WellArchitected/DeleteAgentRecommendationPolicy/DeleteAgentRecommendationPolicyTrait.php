<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteAgentRecommendationPolicy;

trait DeleteAgentRecommendationPolicyTrait
{
    /**
     * @param DeleteAgentRecommendationPolicyRequest $args
     * @return DeleteAgentRecommendationPolicyResponse
     */
    public function deleteAgentRecommendationPolicy(DeleteAgentRecommendationPolicyRequest $args)
    {
        $result = parent::deleteAgentRecommendationPolicy($args->toArray());
        return new DeleteAgentRecommendationPolicyResponse($result->toArray());
    }
}
