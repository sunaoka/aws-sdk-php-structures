<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OfferEntityIdFilter|null $EntityId
 * @property OfferNameFilter|null $Name
 * @property OfferProductIdFilter|null $ProductId
 * @property OfferResaleAuthorizationIdFilter|null $ResaleAuthorizationId
 * @property OfferReleaseDateFilter|null $ReleaseDate
 * @property OfferAvailabilityEndDateFilter|null $AvailabilityEndDate
 * @property OfferBuyerAccountsFilter|null $BuyerAccounts
 * @property OfferStateFilter|null $State
 * @property OfferTargetingFilter|null $Targeting
 * @property OfferLastModifiedDateFilter|null $LastModifiedDate
 */
class OfferFilters extends Shape
{
    /**
     * @param array{
     *     EntityId?: OfferEntityIdFilter|null,
     *     Name?: OfferNameFilter|null,
     *     ProductId?: OfferProductIdFilter|null,
     *     ResaleAuthorizationId?: OfferResaleAuthorizationIdFilter|null,
     *     ReleaseDate?: OfferReleaseDateFilter|null,
     *     AvailabilityEndDate?: OfferAvailabilityEndDateFilter|null,
     *     BuyerAccounts?: OfferBuyerAccountsFilter|null,
     *     State?: OfferStateFilter|null,
     *     Targeting?: OfferTargetingFilter|null,
     *     LastModifiedDate?: OfferLastModifiedDateFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
