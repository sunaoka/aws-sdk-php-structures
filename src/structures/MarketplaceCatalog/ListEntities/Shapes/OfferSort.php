<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EntityId'|'Name'|'ProductId'|'ResaleAuthorizationId'|'ReleaseDate'|'AvailabilityEndDate'|'BuyerAccounts'|'State'|'Targeting'|'LastModifiedDate' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class OfferSort extends Shape
{
    /**
     * @param array{
     *     SortBy?: 'EntityId'|'Name'|'ProductId'|'ResaleAuthorizationId'|'ReleaseDate'|'AvailabilityEndDate'|'BuyerAccounts'|'State'|'Targeting'|'LastModifiedDate',
     *     SortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
