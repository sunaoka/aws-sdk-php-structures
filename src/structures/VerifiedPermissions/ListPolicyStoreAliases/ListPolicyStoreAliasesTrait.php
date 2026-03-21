<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicyStoreAliases;

trait ListPolicyStoreAliasesTrait
{
    /**
     * @param ListPolicyStoreAliasesRequest $args
     * @return ListPolicyStoreAliasesResponse
     */
    public function listPolicyStoreAliases(ListPolicyStoreAliasesRequest $args)
    {
        $result = parent::listPolicyStoreAliases($args->toArray());
        return new ListPolicyStoreAliasesResponse($result->toArray());
    }
}
