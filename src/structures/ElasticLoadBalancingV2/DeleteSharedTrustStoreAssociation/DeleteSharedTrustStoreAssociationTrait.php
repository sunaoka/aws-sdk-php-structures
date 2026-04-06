<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DeleteSharedTrustStoreAssociation;

trait DeleteSharedTrustStoreAssociationTrait
{
    /**
     * @param DeleteSharedTrustStoreAssociationRequest $args
     * @return DeleteSharedTrustStoreAssociationResponse
     */
    public function deleteSharedTrustStoreAssociation(DeleteSharedTrustStoreAssociationRequest $args)
    {
        $result = parent::deleteSharedTrustStoreAssociation($args->toArray());
        return new DeleteSharedTrustStoreAssociationResponse($result->toArray());
    }
}
