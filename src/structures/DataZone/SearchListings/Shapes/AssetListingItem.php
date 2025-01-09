<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetListingItemAdditionalAttributes $additionalAttributes
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property string $entityId
 * @property string $entityRevision
 * @property string $entityType
 * @property list<DetailedGlossaryTerm> $glossaryTerms
 * @property string $listingCreatedBy
 * @property string $listingId
 * @property string $listingRevision
 * @property string $listingUpdatedBy
 * @property string $name
 * @property string $owningProjectId
 */
class AssetListingItem extends Shape
{
    /**
     * @param array{
     *     additionalAttributes?: AssetListingItemAdditionalAttributes,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     entityId?: string,
     *     entityRevision?: string,
     *     entityType?: string,
     *     glossaryTerms?: list<DetailedGlossaryTerm>,
     *     listingCreatedBy?: string,
     *     listingId?: string,
     *     listingRevision?: string,
     *     listingUpdatedBy?: string,
     *     name?: string,
     *     owningProjectId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
