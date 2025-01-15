<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataProductListingItemAdditionalAttributes|null $additionalAttributes
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $description
 * @property string|null $entityId
 * @property string|null $entityRevision
 * @property list<DetailedGlossaryTerm>|null $glossaryTerms
 * @property list<ListingSummaryItem>|null $items
 * @property string|null $listingCreatedBy
 * @property string|null $listingId
 * @property string|null $listingRevision
 * @property string|null $listingUpdatedBy
 * @property string|null $name
 * @property string|null $owningProjectId
 */
class DataProductListingItem extends Shape
{
    /**
     * @param array{
     *     additionalAttributes?: DataProductListingItemAdditionalAttributes|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     entityId?: string|null,
     *     entityRevision?: string|null,
     *     glossaryTerms?: list<DetailedGlossaryTerm>|null,
     *     items?: list<ListingSummaryItem>|null,
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
