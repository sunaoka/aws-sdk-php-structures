<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AssetInDataProductListingItem> $assetListings
 * @property string $description
 * @property string $entityId
 * @property string $entityRevision
 * @property list<DetailedGlossaryTerm> $glossaryTerms
 * @property string $name
 */
class SubscribedProductListing extends Shape
{
    /**
     * @param array{
     *     assetListings?: list<AssetInDataProductListingItem>,
     *     description?: string,
     *     entityId?: string,
     *     entityRevision?: string,
     *     glossaryTerms?: list<DetailedGlossaryTerm>,
     *     name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
