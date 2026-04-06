<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListKeyValueStores;

trait ListKeyValueStoresTrait
{
    /**
     * @param ListKeyValueStoresRequest $args
     * @return ListKeyValueStoresResponse
     */
    public function listKeyValueStores(ListKeyValueStoresRequest $args)
    {
        $result = parent::listKeyValueStores($args->toArray());
        return new ListKeyValueStoresResponse($result->toArray());
    }
}
