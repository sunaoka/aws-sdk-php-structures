<?php

namespace Sunaoka\Aws\Structures\DataZone\RevokeSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubscribedAssetListing|null $assetListing
 * @property SubscribedProductListing|null $productListing
 */
class SubscribedListingItem extends Shape
{
    /**
     * @param array{
     *     assetListing?: SubscribedAssetListing|null,
     *     productListing?: SubscribedProductListing|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
