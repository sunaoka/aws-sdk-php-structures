<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListEventDataStores;

trait ListEventDataStoresTrait
{
    /**
     * @param ListEventDataStoresRequest $args
     * @return ListEventDataStoresResponse
     */
    public function listEventDataStores(ListEventDataStoresRequest $args)
    {
        $result = parent::listEventDataStores($args->toArray());
        return new ListEventDataStoresResponse($result->toArray());
    }
}
