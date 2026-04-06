<?php

namespace Sunaoka\Aws\Structures\DataZone\GetSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $entityId
 * @property string|null $entityRevision
 * @property list<DetailedGlossaryTerm>|null $glossaryTerms
 * @property string|null $name
 * @property string|null $description
 * @property list<AssetInDataProductListingItem>|null $assetListings
 */
class SubscribedProductListing extends Shape
{
    /**
     * @param array{
     *     entityId?: string|null,
     *     entityRevision?: string|null,
     *     glossaryTerms?: list<DetailedGlossaryTerm>|null,
     *     name?: string|null,
     *     description?: string|null,
     *     assetListings?: list<AssetInDataProductListingItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
