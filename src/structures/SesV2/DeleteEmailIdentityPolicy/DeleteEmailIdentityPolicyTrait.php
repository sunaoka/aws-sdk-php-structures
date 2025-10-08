<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteEmailIdentityPolicy;

trait DeleteEmailIdentityPolicyTrait
{
    /**
     * @param DeleteEmailIdentityPolicyRequest $args
     * @return DeleteEmailIdentityPolicyResponse
     */
    public function deleteEmailIdentityPolicy(DeleteEmailIdentityPolicyRequest $args)
    {
        $result = parent::deleteEmailIdentityPolicy($args->toArray());
        return new DeleteEmailIdentityPolicyResponse($result->toArray());
    }
}
