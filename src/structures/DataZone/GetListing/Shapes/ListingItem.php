<?php

namespace Sunaoka\Aws\Structures\DataZone\GetListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetListing|null $assetListing
 * @property DataProductListing|null $dataProductListing
 */
class ListingItem extends Shape
{
    /**
     * @param array{
     *     assetListing?: AssetListing|null,
     *     dataProductListing?: DataProductListing|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
