<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ValidatePolicy;

trait ValidatePolicyTrait
{
    /**
     * @param ValidatePolicyRequest $args
     * @return ValidatePolicyResponse
     */
    public function validatePolicy(ValidatePolicyRequest $args)
    {
        $result = parent::validatePolicy($args->toArray());
        return new ValidatePolicyResponse($result->toArray());
    }
}
