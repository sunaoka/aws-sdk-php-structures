<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTrustStoreRevocations;

trait DescribeTrustStoreRevocationsTrait
{
    /**
     * @param DescribeTrustStoreRevocationsRequest $args
     * @return DescribeTrustStoreRevocationsResponse
     */
    public function describeTrustStoreRevocations(DescribeTrustStoreRevocationsRequest $args)
    {
        $result = parent::describeTrustStoreRevocations($args->toArray());
        return new DescribeTrustStoreRevocationsResponse($result->toArray());
    }
}
