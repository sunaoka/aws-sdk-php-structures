<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetTrustStore;

trait GetTrustStoreTrait
{
    /**
     * @param GetTrustStoreRequest $args
     * @return GetTrustStoreResponse
     */
    public function getTrustStore(GetTrustStoreRequest $args)
    {
        $result = parent::getTrustStore($args->toArray());
        return new GetTrustStoreResponse($result->toArray());
    }
}
