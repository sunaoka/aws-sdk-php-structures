<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ProductId
 * @property string $ProductName
 * @property string $ManufacturerAccountId
 * @property string $ManufacturerLegalName
 * @property string $ResellerAccountID
 * @property string $ResellerLegalName
 * @property 'Draft'|'Active'|'Restricted' $Status
 * @property string $OfferExtendedStatus
 * @property string $CreatedDate
 * @property string $AvailabilityEndDate
 */
class ResaleAuthorizationSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     ProductId?: string,
     *     ProductName?: string,
     *     ManufacturerAccountId?: string,
     *     ManufacturerLegalName?: string,
     *     ResellerAccountID?: string,
     *     ResellerLegalName?: string,
     *     Status?: 'Draft'|'Active'|'Restricted',
     *     OfferExtendedStatus?: string,
     *     CreatedDate?: string,
     *     AvailabilityEndDate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
