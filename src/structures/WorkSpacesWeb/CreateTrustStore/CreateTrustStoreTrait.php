<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateTrustStore;

trait CreateTrustStoreTrait
{
    /**
     * @param CreateTrustStoreRequest $args
     * @return CreateTrustStoreResponse
     */
    public function createTrustStore(CreateTrustStoreRequest $args)
    {
        $result = parent::createTrustStore($args->toArray());
        return new CreateTrustStoreResponse($result->toArray());
    }
}
