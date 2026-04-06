<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreatePolicyStoreAlias;

trait CreatePolicyStoreAliasTrait
{
    /**
     * @param CreatePolicyStoreAliasRequest $args
     * @return CreatePolicyStoreAliasResponse
     */
    public function createPolicyStoreAlias(CreatePolicyStoreAliasRequest $args)
    {
        $result = parent::createPolicyStoreAlias($args->toArray());
        return new CreatePolicyStoreAliasResponse($result->toArray());
    }
}
