<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateSubscriptionRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubscribedAssetListing $assetListing
 * @property SubscribedProductListing $productListing
 */
class SubscribedListingItem extends Shape
{
    /**
     * @param array{
     *     assetListing?: SubscribedAssetListing,
     *     productListing?: SubscribedProductListing
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
