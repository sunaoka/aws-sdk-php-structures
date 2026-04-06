<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListTrustStores;

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
