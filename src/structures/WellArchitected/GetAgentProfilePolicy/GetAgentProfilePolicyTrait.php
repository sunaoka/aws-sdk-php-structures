<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentProfilePolicy;

trait GetAgentProfilePolicyTrait
{
    /**
     * @param GetAgentProfilePolicyRequest $args
     * @return GetAgentProfilePolicyResponse
     */
    public function getAgentProfilePolicy(GetAgentProfilePolicyRequest $args)
    {
        $result = parent::getAgentProfilePolicy($args->toArray());
        return new GetAgentProfilePolicyResponse($result->toArray());
    }
}
