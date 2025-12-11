<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateTrustStore;

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
