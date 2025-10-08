<?php

namespace Sunaoka\Aws\Structures\ElastiCache\PurchaseReservedCacheNodesOffering;

trait PurchaseReservedCacheNodesOfferingTrait
{
    /**
     * @param PurchaseReservedCacheNodesOfferingRequest $args
     * @return PurchaseReservedCacheNodesOfferingResponse
     */
    public function purchaseReservedCacheNodesOffering(PurchaseReservedCacheNodesOfferingRequest $args)
    {
        $result = parent::purchaseReservedCacheNodesOffering($args->toArray());
        return new PurchaseReservedCacheNodesOfferingResponse($result->toArray());
    }
}
