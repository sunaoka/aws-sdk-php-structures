<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseCapacityBlock;

trait PurchaseCapacityBlockTrait
{
    /**
     * @param PurchaseCapacityBlockRequest $args
     * @return PurchaseCapacityBlockResponse
     */
    public function purchaseCapacityBlock(PurchaseCapacityBlockRequest $args)
    {
        $result = parent::purchaseCapacityBlock($args->toArray());
        return new PurchaseCapacityBlockResponse($result->toArray());
    }
}
