<?php

namespace Sunaoka\Aws\Structures\MediaLive\PurchaseOffering;

trait PurchaseOfferingTrait
{
    /**
     * @param PurchaseOfferingRequest $args
     * @return PurchaseOfferingResponse
     */
    public function purchaseOffering(PurchaseOfferingRequest $args)
    {
        $result = parent::purchaseOffering($args->toArray());
        return new PurchaseOfferingResponse($result->toArray());
    }
}
