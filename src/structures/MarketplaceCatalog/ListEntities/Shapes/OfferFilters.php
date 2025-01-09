<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OfferEntityIdFilter $EntityId
 * @property OfferNameFilter $Name
 * @property OfferProductIdFilter $ProductId
 * @property OfferResaleAuthorizationIdFilter $ResaleAuthorizationId
 * @property OfferReleaseDateFilter $ReleaseDate
 * @property OfferAvailabilityEndDateFilter $AvailabilityEndDate
 * @property OfferBuyerAccountsFilter $BuyerAccounts
 * @property OfferStateFilter $State
 * @property OfferTargetingFilter $Targeting
 * @property OfferLastModifiedDateFilter $LastModifiedDate
 */
class OfferFilters extends Shape
{
    /**
     * @param array{
     *     EntityId?: OfferEntityIdFilter,
     *     Name?: OfferNameFilter,
     *     ProductId?: OfferProductIdFilter,
     *     ResaleAuthorizationId?: OfferResaleAuthorizationIdFilter,
     *     ReleaseDate?: OfferReleaseDateFilter,
     *     AvailabilityEndDate?: OfferAvailabilityEndDateFilter,
     *     BuyerAccounts?: OfferBuyerAccountsFilter,
     *     State?: OfferStateFilter,
     *     Targeting?: OfferTargetingFilter,
     *     LastModifiedDate?: OfferLastModifiedDateFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
