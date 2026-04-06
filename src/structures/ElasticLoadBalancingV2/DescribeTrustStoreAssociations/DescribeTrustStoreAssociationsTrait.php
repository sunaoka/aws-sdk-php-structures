<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTrustStoreAssociations;

trait DescribeTrustStoreAssociationsTrait
{
    /**
     * @param DescribeTrustStoreAssociationsRequest $args
     * @return DescribeTrustStoreAssociationsResponse
     */
    public function describeTrustStoreAssociations(DescribeTrustStoreAssociationsRequest $args)
    {
        $result = parent::describeTrustStoreAssociations($args->toArray());
        return new DescribeTrustStoreAssociationsResponse($result->toArray());
    }
}
