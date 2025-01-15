<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $ProductId
 * @property string|null $ProductName
 * @property string|null $ManufacturerAccountId
 * @property string|null $ManufacturerLegalName
 * @property string|null $ResellerAccountID
 * @property string|null $ResellerLegalName
 * @property 'Draft'|'Active'|'Restricted'|null $Status
 * @property string|null $OfferExtendedStatus
 * @property string|null $CreatedDate
 * @property string|null $AvailabilityEndDate
 */
class ResaleAuthorizationSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ProductId?: string|null,
     *     ProductName?: string|null,
     *     ManufacturerAccountId?: string|null,
     *     ManufacturerLegalName?: string|null,
     *     ResellerAccountID?: string|null,
     *     ResellerLegalName?: string|null,
     *     Status?: 'Draft'|'Active'|'Restricted'|null,
     *     OfferExtendedStatus?: string|null,
     *     CreatedDate?: string|null,
     *     AvailabilityEndDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
