<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DeleteTrustStore;

trait DeleteTrustStoreTrait
{
    /**
     * @param DeleteTrustStoreRequest $args
     * @return DeleteTrustStoreResponse
     */
    public function deleteTrustStore(DeleteTrustStoreRequest $args)
    {
        $result = parent::deleteTrustStore($args->toArray());
        return new DeleteTrustStoreResponse($result->toArray());
    }
}
