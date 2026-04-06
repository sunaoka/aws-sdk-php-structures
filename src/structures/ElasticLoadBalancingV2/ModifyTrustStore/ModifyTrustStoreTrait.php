<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyTrustStore;

trait ModifyTrustStoreTrait
{
    /**
     * @param ModifyTrustStoreRequest $args
     * @return ModifyTrustStoreResponse
     */
    public function modifyTrustStore(ModifyTrustStoreRequest $args)
    {
        $result = parent::modifyTrustStore($args->toArray());
        return new ModifyTrustStoreResponse($result->toArray());
    }
}
