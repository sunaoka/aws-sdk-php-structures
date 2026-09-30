<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListIdentityStores;

trait ListIdentityStoresTrait
{
    /**
     * @param ListIdentityStoresRequest $args
     * @return ListIdentityStoresResponse
     */
    public function listIdentityStores(ListIdentityStoresRequest $args)
    {
        $result = parent::listIdentityStores($args->toArray());
        return new ListIdentityStoresResponse($result->toArray());
    }
}
