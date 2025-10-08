<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateEmailIdentityPolicy;

trait CreateEmailIdentityPolicyTrait
{
    /**
     * @param CreateEmailIdentityPolicyRequest $args
     * @return CreateEmailIdentityPolicyResponse
     */
    public function createEmailIdentityPolicy(CreateEmailIdentityPolicyRequest $args)
    {
        $result = parent::createEmailIdentityPolicy($args->toArray());
        return new CreateEmailIdentityPolicyResponse($result->toArray());
    }
}
