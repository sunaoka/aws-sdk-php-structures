<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataProductListingItemAdditionalAttributes $additionalAttributes
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property string $entityId
 * @property string $entityRevision
 * @property list<DetailedGlossaryTerm> $glossaryTerms
 * @property list<ListingSummaryItem> $items
 * @property string $listingCreatedBy
 * @property string $listingId
 * @property string $listingRevision
 * @property string $listingUpdatedBy
 * @property string $name
 * @property string $owningProjectId
 */
class DataProductListingItem extends Shape
{
    /**
     * @param array{
     *     additionalAttributes?: DataProductListingItemAdditionalAttributes,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     entityId?: string,
     *     entityRevision?: string,
     *     glossaryTerms?: list<DetailedGlossaryTerm>,
     *     items?: list<ListingSummaryItem>,
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
