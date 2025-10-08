<?php

namespace Sunaoka\Aws\Structures\MemoryDB\PurchaseReservedNodesOffering;

trait PurchaseReservedNodesOfferingTrait
{
    /**
     * @param PurchaseReservedNodesOfferingRequest $args
     * @return PurchaseReservedNodesOfferingResponse
     */
    public function purchaseReservedNodesOffering(PurchaseReservedNodesOfferingRequest $args)
    {
        $result = parent::purchaseReservedNodesOffering($args->toArray());
        return new PurchaseReservedNodesOfferingResponse($result->toArray());
    }
}
