<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateWorkloadIdentity;

trait UpdateWorkloadIdentityTrait
{
    /**
     * @param UpdateWorkloadIdentityRequest $args
     * @return UpdateWorkloadIdentityResponse
     */
    public function updateWorkloadIdentity(UpdateWorkloadIdentityRequest $args)
    {
        $result = parent::updateWorkloadIdentity($args->toArray());
        return new UpdateWorkloadIdentityResponse($result->toArray());
    }
}
