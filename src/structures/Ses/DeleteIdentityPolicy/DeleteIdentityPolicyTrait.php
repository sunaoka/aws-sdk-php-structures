<?php

namespace Sunaoka\Aws\Structures\Ses\DeleteIdentityPolicy;

trait DeleteIdentityPolicyTrait
{
    /**
     * @param DeleteIdentityPolicyRequest $args
     * @return DeleteIdentityPolicyResponse
     */
    public function deleteIdentityPolicy(DeleteIdentityPolicyRequest $args)
    {
        $result = parent::deleteIdentityPolicy($args->toArray());
        return new DeleteIdentityPolicyResponse($result->toArray());
    }
}
