<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EntityId'|'Name'|'ProductId'|'ResaleAuthorizationId'|'ReleaseDate'|'AvailabilityEndDate'|'BuyerAccounts'|'State'|'Targeting'|'LastModifiedDate'|'OfferSetId'|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 */
class OfferSort extends Shape
{
    /**
     * @param array{
     *     SortBy?: 'EntityId'|'Name'|'ProductId'|'ResaleAuthorizationId'|'ReleaseDate'|'AvailabilityEndDate'|'BuyerAccounts'|'State'|'Targeting'|'LastModifiedDate'|'OfferSetId'|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
