<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetListingItemAdditionalAttributes|null $additionalAttributes
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $description
 * @property string|null $entityId
 * @property string|null $entityRevision
 * @property string|null $entityType
 * @property list<DetailedGlossaryTerm>|null $glossaryTerms
 * @property list<DetailedGlossaryTerm>|null $governedGlossaryTerms
 * @property string|null $listingCreatedBy
 * @property string|null $listingId
 * @property string|null $listingRevision
 * @property string|null $listingUpdatedBy
 * @property string|null $name
 * @property string|null $owningProjectId
 */
class AssetListingItem extends Shape
{
    /**
     * @param array{
     *     additionalAttributes?: AssetListingItemAdditionalAttributes|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     entityId?: string|null,
     *     entityRevision?: string|null,
     *     entityType?: string|null,
     *     glossaryTerms?: list<DetailedGlossaryTerm>|null,
     *     governedGlossaryTerms?: list<DetailedGlossaryTerm>|null,
     *     listingCreatedBy?: string|null,
     *     listingId?: string|null,
     *     listingRevision?: string|null,
     *     listingUpdatedBy?: string|null,
     *     name?: string|null,
     *     owningProjectId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
