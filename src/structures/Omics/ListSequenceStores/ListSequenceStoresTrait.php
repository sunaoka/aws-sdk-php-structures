<?php

namespace Sunaoka\Aws\Structures\Omics\ListSequenceStores;

trait ListSequenceStoresTrait
{
    /**
     * @param ListSequenceStoresRequest $args
     * @return ListSequenceStoresResponse
     */
    public function listSequenceStores(ListSequenceStoresRequest $args)
    {
        $result = parent::listSequenceStores($args->toArray());
        return new ListSequenceStoresResponse($result->toArray());
    }
}
