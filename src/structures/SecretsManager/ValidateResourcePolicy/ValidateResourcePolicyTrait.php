<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ValidateResourcePolicy;

trait ValidateResourcePolicyTrait
{
    /**
     * @param ValidateResourcePolicyRequest $args
     * @return ValidateResourcePolicyResponse
     */
    public function validateResourcePolicy(ValidateResourcePolicyRequest $args)
    {
        $result = parent::validateResourcePolicy($args->toArray());
        return new ValidateResourcePolicyResponse($result->toArray());
    }
}
