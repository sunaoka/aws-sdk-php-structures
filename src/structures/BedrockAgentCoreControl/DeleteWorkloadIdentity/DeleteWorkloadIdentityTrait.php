<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteWorkloadIdentity;

trait DeleteWorkloadIdentityTrait
{
    /**
     * @param DeleteWorkloadIdentityRequest $args
     * @return DeleteWorkloadIdentityResponse
     */
    public function deleteWorkloadIdentity(DeleteWorkloadIdentityRequest $args)
    {
        $result = parent::deleteWorkloadIdentity($args->toArray());
        return new DeleteWorkloadIdentityResponse($result->toArray());
    }
}
