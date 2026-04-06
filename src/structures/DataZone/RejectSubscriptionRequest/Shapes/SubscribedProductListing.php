<?php

namespace Sunaoka\Aws\Structures\DataZone\RejectSubscriptionRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AssetInDataProductListingItem>|null $assetListings
 * @property string|null $description
 * @property string|null $entityId
 * @property string|null $entityRevision
 * @property list<DetailedGlossaryTerm>|null $glossaryTerms
 * @property string|null $name
 */
class SubscribedProductListing extends Shape
{
    /**
     * @param array{
     *     assetListings?: list<AssetInDataProductListingItem>|null,
     *     description?: string|null,
     *     entityId?: string|null,
     *     entityRevision?: string|null,
     *     glossaryTerms?: list<DetailedGlossaryTerm>|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
