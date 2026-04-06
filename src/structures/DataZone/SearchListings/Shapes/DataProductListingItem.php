<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $listingId
 * @property string|null $listingRevision
 * @property string|null $name
 * @property string|null $entityId
 * @property string|null $entityRevision
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $listingCreatedBy
 * @property string|null $listingUpdatedBy
 * @property list<DetailedGlossaryTerm>|null $glossaryTerms
 * @property string|null $owningProjectId
 * @property DataProductListingItemAdditionalAttributes|null $additionalAttributes
 * @property list<ListingSummaryItem>|null $items
 */
class DataProductListingItem extends Shape
{
    /**
     * @param array{
     *     listingId?: string|null,
     *     listingRevision?: string|null,
     *     name?: string|null,
     *     entityId?: string|null,
     *     entityRevision?: string|null,
     *     description?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     listingCreatedBy?: string|null,
     *     listingUpdatedBy?: string|null,
     *     glossaryTerms?: list<DetailedGlossaryTerm>|null,
     *     owningProjectId?: string|null,
     *     additionalAttributes?: DataProductListingItemAdditionalAttributes|null,
     *     items?: list<ListingSummaryItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
