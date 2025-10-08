<?php

namespace Sunaoka\Aws\Structures\Iam\GetContextKeysForCustomPolicy;

trait GetContextKeysForCustomPolicyTrait
{
    /**
     * @param GetContextKeysForCustomPolicyRequest $args
     * @return GetContextKeysForCustomPolicyResponse
     */
    public function getContextKeysForCustomPolicy(GetContextKeysForCustomPolicyRequest $args)
    {
        $result = parent::getContextKeysForCustomPolicy($args->toArray());
        return new GetContextKeysForCustomPolicyResponse($result->toArray());
    }
}
