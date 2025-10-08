<?php

namespace Sunaoka\Aws\Structures\SesV2\UpdateEmailIdentityPolicy;

trait UpdateEmailIdentityPolicyTrait
{
    /**
     * @param UpdateEmailIdentityPolicyRequest $args
     * @return UpdateEmailIdentityPolicyResponse
     */
    public function updateEmailIdentityPolicy(UpdateEmailIdentityPolicyRequest $args)
    {
        $result = parent::updateEmailIdentityPolicy($args->toArray());
        return new UpdateEmailIdentityPolicyResponse($result->toArray());
    }
}
