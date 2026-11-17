<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListContextStores;

trait ListContextStoresTrait
{
    /**
     * @param ListContextStoresRequest $args
     * @return ListContextStoresResponse
     */
    public function listContextStores(ListContextStoresRequest $args)
    {
        $result = parent::listContextStores($args->toArray());
        return new ListContextStoresResponse($result->toArray());
    }
}
