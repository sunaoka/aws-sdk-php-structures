<?php

namespace Sunaoka\Aws\Structures\WellArchitected\PutAgentProfilePolicy;

trait PutAgentProfilePolicyTrait
{
    /**
     * @param PutAgentProfilePolicyRequest $args
     * @return PutAgentProfilePolicyResponse
     */
    public function putAgentProfilePolicy(PutAgentProfilePolicyRequest $args)
    {
        $result = parent::putAgentProfilePolicy($args->toArray());
        return new PutAgentProfilePolicyResponse($result->toArray());
    }
}
