<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResaleAuthorizationEntityIdFilter|null $EntityId
 * @property ResaleAuthorizationNameFilter|null $Name
 * @property ResaleAuthorizationProductIdFilter|null $ProductId
 * @property ResaleAuthorizationCreatedDateFilter|null $CreatedDate
 * @property ResaleAuthorizationAvailabilityEndDateFilter|null $AvailabilityEndDate
 * @property ResaleAuthorizationManufacturerAccountIdFilter|null $ManufacturerAccountId
 * @property ResaleAuthorizationProductNameFilter|null $ProductName
 * @property ResaleAuthorizationManufacturerLegalNameFilter|null $ManufacturerLegalName
 * @property ResaleAuthorizationResellerAccountIDFilter|null $ResellerAccountID
 * @property ResaleAuthorizationResellerLegalNameFilter|null $ResellerLegalName
 * @property ResaleAuthorizationStatusFilter|null $Status
 * @property ResaleAuthorizationOfferExtendedStatusFilter|null $OfferExtendedStatus
 * @property ResaleAuthorizationLastModifiedDateFilter|null $LastModifiedDate
 */
class ResaleAuthorizationFilters extends Shape
{
    /**
     * @param array{
     *     EntityId?: ResaleAuthorizationEntityIdFilter|null,
     *     Name?: ResaleAuthorizationNameFilter|null,
     *     ProductId?: ResaleAuthorizationProductIdFilter|null,
     *     CreatedDate?: ResaleAuthorizationCreatedDateFilter|null,
     *     AvailabilityEndDate?: ResaleAuthorizationAvailabilityEndDateFilter|null,
     *     ManufacturerAccountId?: ResaleAuthorizationManufacturerAccountIdFilter|null,
     *     ProductName?: ResaleAuthorizationProductNameFilter|null,
     *     ManufacturerLegalName?: ResaleAuthorizationManufacturerLegalNameFilter|null,
     *     ResellerAccountID?: ResaleAuthorizationResellerAccountIDFilter|null,
     *     ResellerLegalName?: ResaleAuthorizationResellerLegalNameFilter|null,
     *     Status?: ResaleAuthorizationStatusFilter|null,
     *     OfferExtendedStatus?: ResaleAuthorizationOfferExtendedStatusFilter|null,
     *     LastModifiedDate?: ResaleAuthorizationLastModifiedDateFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
