<?php

namespace Sunaoka\Aws\Structures\Omics\ListReferenceStores;

trait ListReferenceStoresTrait
{
    /**
     * @param ListReferenceStoresRequest $args
     * @return ListReferenceStoresResponse
     */
    public function listReferenceStores(ListReferenceStoresRequest $args)
    {
        $result = parent::listReferenceStores($args->toArray());
        return new ListReferenceStoresResponse($result->toArray());
    }
}
