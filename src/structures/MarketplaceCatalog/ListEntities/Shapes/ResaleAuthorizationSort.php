<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EntityId'|'Name'|'ProductId'|'ProductName'|'ManufacturerAccountId'|'ManufacturerLegalName'|'ResellerAccountID'|'ResellerLegalName'|'Status'|'OfferExtendedStatus'|'CreatedDate'|'AvailabilityEndDate'|'LastModifiedDate' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class ResaleAuthorizationSort extends Shape
{
    /**
     * @param array{
     *     SortBy?: 'EntityId'|'Name'|'ProductId'|'ProductName'|'ManufacturerAccountId'|'ManufacturerLegalName'|'ResellerAccountID'|'ResellerLegalName'|'Status'|'OfferExtendedStatus'|'CreatedDate'|'AvailabilityEndDate'|'LastModifiedDate',
     *     SortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
