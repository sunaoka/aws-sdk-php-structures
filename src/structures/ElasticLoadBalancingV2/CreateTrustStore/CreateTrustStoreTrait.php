<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateTrustStore;

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
