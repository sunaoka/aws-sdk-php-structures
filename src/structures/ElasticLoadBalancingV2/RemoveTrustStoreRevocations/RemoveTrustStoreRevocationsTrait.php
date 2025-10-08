<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\RemoveTrustStoreRevocations;

trait RemoveTrustStoreRevocationsTrait
{
    /**
     * @param RemoveTrustStoreRevocationsRequest $args
     * @return RemoveTrustStoreRevocationsResponse
     */
    public function removeTrustStoreRevocations(RemoveTrustStoreRevocationsRequest $args)
    {
        $result = parent::removeTrustStoreRevocations($args->toArray());
        return new RemoveTrustStoreRevocationsResponse($result->toArray());
    }
}
