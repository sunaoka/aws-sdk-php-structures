<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateTrustStore;

trait AssociateTrustStoreTrait
{
    /**
     * @param AssociateTrustStoreRequest $args
     * @return AssociateTrustStoreResponse
     */
    public function associateTrustStore(AssociateTrustStoreRequest $args)
    {
        $result = parent::associateTrustStore($args->toArray());
        return new AssociateTrustStoreResponse($result->toArray());
    }
}
