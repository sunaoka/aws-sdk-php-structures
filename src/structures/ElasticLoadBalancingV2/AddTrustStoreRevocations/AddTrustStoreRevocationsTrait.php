<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\AddTrustStoreRevocations;

trait AddTrustStoreRevocationsTrait
{
    /**
     * @param AddTrustStoreRevocationsRequest $args
     * @return AddTrustStoreRevocationsResponse
     */
    public function addTrustStoreRevocations(AddTrustStoreRevocationsRequest $args)
    {
        $result = parent::addTrustStoreRevocations($args->toArray());
        return new AddTrustStoreRevocationsResponse($result->toArray());
    }
}
