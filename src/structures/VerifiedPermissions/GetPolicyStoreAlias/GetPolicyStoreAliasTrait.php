<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetPolicyStoreAlias;

trait GetPolicyStoreAliasTrait
{
    /**
     * @param GetPolicyStoreAliasRequest $args
     * @return GetPolicyStoreAliasResponse
     */
    public function getPolicyStoreAlias(GetPolicyStoreAliasRequest $args)
    {
        $result = parent::getPolicyStoreAlias($args->toArray());
        return new GetPolicyStoreAliasResponse($result->toArray());
    }
}
