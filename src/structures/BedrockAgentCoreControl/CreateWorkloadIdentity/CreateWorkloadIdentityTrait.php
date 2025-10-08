<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateWorkloadIdentity;

trait CreateWorkloadIdentityTrait
{
    /**
     * @param CreateWorkloadIdentityRequest $args
     * @return CreateWorkloadIdentityResponse
     */
    public function createWorkloadIdentity(CreateWorkloadIdentityRequest $args)
    {
        $result = parent::createWorkloadIdentity($args->toArray());
        return new CreateWorkloadIdentityResponse($result->toArray());
    }
}
