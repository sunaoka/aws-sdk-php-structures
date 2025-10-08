<?php

namespace Sunaoka\Aws\Structures\Iam\GetContextKeysForPrincipalPolicy;

trait GetContextKeysForPrincipalPolicyTrait
{
    /**
     * @param GetContextKeysForPrincipalPolicyRequest $args
     * @return GetContextKeysForPrincipalPolicyResponse
     */
    public function getContextKeysForPrincipalPolicy(GetContextKeysForPrincipalPolicyRequest $args)
    {
        $result = parent::getContextKeysForPrincipalPolicy($args->toArray());
        return new GetContextKeysForPrincipalPolicyResponse($result->toArray());
    }
}
