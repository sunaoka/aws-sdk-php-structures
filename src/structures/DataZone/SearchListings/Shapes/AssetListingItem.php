<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $listingId
 * @property string|null $listingRevision
 * @property string|null $name
 * @property string|null $entityId
 * @property string|null $entityRevision
 * @property string|null $entityType
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $listingCreatedBy
 * @property string|null $listingUpdatedBy
 * @property list<DetailedGlossaryTerm>|null $glossaryTerms
 * @property list<DetailedGlossaryTerm>|null $governedGlossaryTerms
 * @property string|null $owningProjectId
 * @property AssetListingItemAdditionalAttributes|null $additionalAttributes
 */
class AssetListingItem extends Shape
{
    /**
     * @param array{
     *     listingId?: string|null,
     *     listingRevision?: string|null,
     *     name?: string|null,
     *     entityId?: string|null,
     *     entityRevision?: string|null,
     *     entityType?: string|null,
     *     description?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     listingCreatedBy?: string|null,
     *     listingUpdatedBy?: string|null,
     *     glossaryTerms?: list<DetailedGlossaryTerm>|null,
     *     governedGlossaryTerms?: list<DetailedGlossaryTerm>|null,
     *     owningProjectId?: string|null,
     *     additionalAttributes?: AssetListingItemAdditionalAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
