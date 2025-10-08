<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetSecurityPolicy;

trait GetSecurityPolicyTrait
{
    /**
     * @param GetSecurityPolicyRequest $args
     * @return GetSecurityPolicyResponse
     */
    public function getSecurityPolicy(GetSecurityPolicyRequest $args)
    {
        $result = parent::getSecurityPolicy($args->toArray());
        return new GetSecurityPolicyResponse($result->toArray());
    }
}
