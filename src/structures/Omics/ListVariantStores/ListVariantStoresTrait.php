<?php

namespace Sunaoka\Aws\Structures\Omics\ListVariantStores;

trait ListVariantStoresTrait
{
    /**
     * @param ListVariantStoresRequest $args
     * @return ListVariantStoresResponse
     */
    public function listVariantStores(ListVariantStoresRequest $args)
    {
        $result = parent::listVariantStores($args->toArray());
        return new ListVariantStoresResponse($result->toArray());
    }
}
