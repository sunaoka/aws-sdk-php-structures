<?php

namespace Sunaoka\Aws\Structures\Kms\GetKeyPolicy;

trait GetKeyPolicyTrait
{
    /**
     * @param GetKeyPolicyRequest $args
     * @return GetKeyPolicyResponse
     */
    public function getKeyPolicy(GetKeyPolicyRequest $args)
    {
        $result = parent::getKeyPolicy($args->toArray());
        return new GetKeyPolicyResponse($result->toArray());
    }
}
