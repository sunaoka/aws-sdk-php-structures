<?php

namespace Sunaoka\Aws\Structures\DataZone\GetListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetListing $assetListing
 * @property DataProductListing $dataProductListing
 */
class ListingItem extends Shape
{
    /**
     * @param array{
     *     assetListing?: AssetListing,
     *     dataProductListing?: DataProductListing
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
