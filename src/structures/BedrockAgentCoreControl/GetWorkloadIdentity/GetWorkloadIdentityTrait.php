<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetWorkloadIdentity;

trait GetWorkloadIdentityTrait
{
    /**
     * @param GetWorkloadIdentityRequest $args
     * @return GetWorkloadIdentityResponse
     */
    public function getWorkloadIdentity(GetWorkloadIdentityRequest $args)
    {
        $result = parent::getWorkloadIdentity($args->toArray());
        return new GetWorkloadIdentityResponse($result->toArray());
    }
}
