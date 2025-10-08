<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\PutConfiguredAudienceModelPolicy;

trait PutConfiguredAudienceModelPolicyTrait
{
    /**
     * @param PutConfiguredAudienceModelPolicyRequest $args
     * @return PutConfiguredAudienceModelPolicyResponse
     */
    public function putConfiguredAudienceModelPolicy(PutConfiguredAudienceModelPolicyRequest $args)
    {
        $result = parent::putConfiguredAudienceModelPolicy($args->toArray());
        return new PutConfiguredAudienceModelPolicyResponse($result->toArray());
    }
}
