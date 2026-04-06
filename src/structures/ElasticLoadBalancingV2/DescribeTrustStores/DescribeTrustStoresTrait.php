<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTrustStores;

trait DescribeTrustStoresTrait
{
    /**
     * @param DescribeTrustStoresRequest $args
     * @return DescribeTrustStoresResponse
     */
    public function describeTrustStores(DescribeTrustStoresRequest $args)
    {
        $result = parent::describeTrustStores($args->toArray());
        return new DescribeTrustStoresResponse($result->toArray());
    }
}
