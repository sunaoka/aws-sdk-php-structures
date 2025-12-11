<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OfferSetEntityIdFilter|null $EntityId
 * @property OfferSetNameFilter|null $Name
 * @property OfferSetStateFilter|null $State
 * @property OfferSetReleaseDateFilter|null $ReleaseDate
 * @property OfferSetAssociatedOfferIdsFilter|null $AssociatedOfferIds
 * @property OfferSetSolutionIdFilter|null $SolutionId
 * @property OfferSetLastModifiedDateFilter|null $LastModifiedDate
 */
class OfferSetFilters extends Shape
{
    /**
     * @param array{
     *     EntityId?: OfferSetEntityIdFilter|null,
     *     Name?: OfferSetNameFilter|null,
     *     State?: OfferSetStateFilter|null,
     *     ReleaseDate?: OfferSetReleaseDateFilter|null,
     *     AssociatedOfferIds?: OfferSetAssociatedOfferIdsFilter|null,
     *     SolutionId?: OfferSetSolutionIdFilter|null,
     *     LastModifiedDate?: OfferSetLastModifiedDateFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
