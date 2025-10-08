<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateSecurityPolicy;

trait UpdateSecurityPolicyTrait
{
    /**
     * @param UpdateSecurityPolicyRequest $args
     * @return UpdateSecurityPolicyResponse
     */
    public function updateSecurityPolicy(UpdateSecurityPolicyRequest $args)
    {
        $result = parent::updateSecurityPolicy($args->toArray());
        return new UpdateSecurityPolicyResponse($result->toArray());
    }
}
