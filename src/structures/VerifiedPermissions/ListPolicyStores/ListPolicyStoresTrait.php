<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicyStores;

trait ListPolicyStoresTrait
{
    /**
     * @param ListPolicyStoresRequest $args
     * @return ListPolicyStoresResponse
     */
    public function listPolicyStores(ListPolicyStoresRequest $args)
    {
        $result = parent::listPolicyStores($args->toArray());
        return new ListPolicyStoresResponse($result->toArray());
    }
}
