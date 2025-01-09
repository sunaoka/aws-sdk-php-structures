<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetListingItem $assetListing
 * @property DataProductListingItem $dataProductListing
 */
class SearchResultItem extends Shape
{
    /**
     * @param array{
     *     assetListing?: AssetListingItem,
     *     dataProductListing?: DataProductListingItem
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
