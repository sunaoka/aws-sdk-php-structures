<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetListingItem|null $assetListing
 * @property DataProductListingItem|null $dataProductListing
 */
class SearchResultItem extends Shape
{
    /**
     * @param array{
     *     assetListing?: AssetListingItem|null,
     *     dataProductListing?: DataProductListingItem|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
