<?php

namespace Sunaoka\Aws\Structures\SesV2\UpdateReputationEntityPolicy;

trait UpdateReputationEntityPolicyTrait
{
    /**
     * @param UpdateReputationEntityPolicyRequest $args
     * @return UpdateReputationEntityPolicyResponse
     */
    public function updateReputationEntityPolicy(UpdateReputationEntityPolicyRequest $args)
    {
        $result = parent::updateReputationEntityPolicy($args->toArray());
        return new UpdateReputationEntityPolicyResponse($result->toArray());
    }
}
