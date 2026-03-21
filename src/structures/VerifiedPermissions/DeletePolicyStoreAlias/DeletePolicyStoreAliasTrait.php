<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\DeletePolicyStoreAlias;

trait DeletePolicyStoreAliasTrait
{
    /**
     * @param DeletePolicyStoreAliasRequest $args
     * @return DeletePolicyStoreAliasResponse
     */
    public function deletePolicyStoreAlias(DeletePolicyStoreAliasRequest $args)
    {
        $result = parent::deletePolicyStoreAlias($args->toArray());
        return new DeletePolicyStoreAliasResponse($result->toArray());
    }
}
