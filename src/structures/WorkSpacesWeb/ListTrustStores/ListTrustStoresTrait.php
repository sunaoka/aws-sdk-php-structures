<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListTrustStores;

trait ListTrustStoresTrait
{
    /**
     * @param ListTrustStoresRequest $args
     * @return ListTrustStoresResponse
     */
    public function listTrustStores(ListTrustStoresRequest $args)
    {
        $result = parent::listTrustStores($args->toArray());
        return new ListTrustStoresResponse($result->toArray());
    }
}
