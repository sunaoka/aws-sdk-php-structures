<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteAgentProfilePolicy;

trait DeleteAgentProfilePolicyTrait
{
    /**
     * @param DeleteAgentProfilePolicyRequest $args
     * @return DeleteAgentProfilePolicyResponse
     */
    public function deleteAgentProfilePolicy(DeleteAgentProfilePolicyRequest $args)
    {
        $result = parent::deleteAgentProfilePolicy($args->toArray());
        return new DeleteAgentProfilePolicyResponse($result->toArray());
    }
}
