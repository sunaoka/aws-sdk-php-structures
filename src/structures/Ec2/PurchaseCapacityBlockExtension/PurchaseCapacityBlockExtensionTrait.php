<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseCapacityBlockExtension;

trait PurchaseCapacityBlockExtensionTrait
{
    /**
     * @param PurchaseCapacityBlockExtensionRequest $args
     * @return PurchaseCapacityBlockExtensionResponse
     */
    public function purchaseCapacityBlockExtension(PurchaseCapacityBlockExtensionRequest $args)
    {
        $result = parent::purchaseCapacityBlockExtension($args->toArray());
        return new PurchaseCapacityBlockExtensionResponse($result->toArray());
    }
}
