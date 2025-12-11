<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByTrustStore;

trait ListDistributionsByTrustStoreTrait
{
    /**
     * @param ListDistributionsByTrustStoreRequest $args
     * @return ListDistributionsByTrustStoreResponse
     */
    public function listDistributionsByTrustStore(ListDistributionsByTrustStoreRequest $args)
    {
        $result = parent::listDistributionsByTrustStore($args->toArray());
        return new ListDistributionsByTrustStoreResponse($result->toArray());
    }
}
