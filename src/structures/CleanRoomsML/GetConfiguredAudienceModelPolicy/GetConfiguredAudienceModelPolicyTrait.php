<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredAudienceModelPolicy;

trait GetConfiguredAudienceModelPolicyTrait
{
    /**
     * @param GetConfiguredAudienceModelPolicyRequest $args
     * @return GetConfiguredAudienceModelPolicyResponse
     */
    public function getConfiguredAudienceModelPolicy(GetConfiguredAudienceModelPolicyRequest $args)
    {
        $result = parent::getConfiguredAudienceModelPolicy($args->toArray());
        return new GetConfiguredAudienceModelPolicyResponse($result->toArray());
    }
}
