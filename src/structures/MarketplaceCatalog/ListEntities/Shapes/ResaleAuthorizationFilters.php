<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResaleAuthorizationEntityIdFilter $EntityId
 * @property ResaleAuthorizationNameFilter $Name
 * @property ResaleAuthorizationProductIdFilter $ProductId
 * @property ResaleAuthorizationCreatedDateFilter $CreatedDate
 * @property ResaleAuthorizationAvailabilityEndDateFilter $AvailabilityEndDate
 * @property ResaleAuthorizationManufacturerAccountIdFilter $ManufacturerAccountId
 * @property ResaleAuthorizationProductNameFilter $ProductName
 * @property ResaleAuthorizationManufacturerLegalNameFilter $ManufacturerLegalName
 * @property ResaleAuthorizationResellerAccountIDFilter $ResellerAccountID
 * @property ResaleAuthorizationResellerLegalNameFilter $ResellerLegalName
 * @property ResaleAuthorizationStatusFilter $Status
 * @property ResaleAuthorizationOfferExtendedStatusFilter $OfferExtendedStatus
 * @property ResaleAuthorizationLastModifiedDateFilter $LastModifiedDate
 */
class ResaleAuthorizationFilters extends Shape
{
    /**
     * @param array{
     *     EntityId?: ResaleAuthorizationEntityIdFilter,
     *     Name?: ResaleAuthorizationNameFilter,
     *     ProductId?: ResaleAuthorizationProductIdFilter,
     *     CreatedDate?: ResaleAuthorizationCreatedDateFilter,
     *     AvailabilityEndDate?: ResaleAuthorizationAvailabilityEndDateFilter,
     *     ManufacturerAccountId?: ResaleAuthorizationManufacturerAccountIdFilter,
     *     ProductName?: ResaleAuthorizationProductNameFilter,
     *     ManufacturerLegalName?: ResaleAuthorizationManufacturerLegalNameFilter,
     *     ResellerAccountID?: ResaleAuthorizationResellerAccountIDFilter,
     *     ResellerLegalName?: ResaleAuthorizationResellerLegalNameFilter,
     *     Status?: ResaleAuthorizationStatusFilter,
     *     OfferExtendedStatus?: ResaleAuthorizationOfferExtendedStatusFilter,
     *     LastModifiedDate?: ResaleAuthorizationLastModifiedDateFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
