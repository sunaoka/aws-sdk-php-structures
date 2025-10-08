<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateSecurityPolicy;

trait CreateSecurityPolicyTrait
{
    /**
     * @param CreateSecurityPolicyRequest $args
     * @return CreateSecurityPolicyResponse
     */
    public function createSecurityPolicy(CreateSecurityPolicyRequest $args)
    {
        $result = parent::createSecurityPolicy($args->toArray());
        return new CreateSecurityPolicyResponse($result->toArray());
    }
}
