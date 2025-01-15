<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EntityId'|'Name'|'ProductId'|'ProductName'|'ManufacturerAccountId'|'ManufacturerLegalName'|'ResellerAccountID'|'ResellerLegalName'|'Status'|'OfferExtendedStatus'|'CreatedDate'|'AvailabilityEndDate'|'LastModifiedDate'|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 */
class ResaleAuthorizationSort extends Shape
{
    /**
     * @param array{
     *     SortBy?: 'EntityId'|'Name'|'ProductId'|'ProductName'|'ManufacturerAccountId'|'ManufacturerLegalName'|'ResellerAccountID'|'ResellerLegalName'|'Status'|'OfferExtendedStatus'|'CreatedDate'|'AvailabilityEndDate'|'LastModifiedDate'|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
