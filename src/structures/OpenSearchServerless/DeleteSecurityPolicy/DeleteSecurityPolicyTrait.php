<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteSecurityPolicy;

trait DeleteSecurityPolicyTrait
{
    /**
     * @param DeleteSecurityPolicyRequest $args
     * @return DeleteSecurityPolicyResponse
     */
    public function deleteSecurityPolicy(DeleteSecurityPolicyRequest $args)
    {
        $result = parent::deleteSecurityPolicy($args->toArray());
        return new DeleteSecurityPolicyResponse($result->toArray());
    }
}
