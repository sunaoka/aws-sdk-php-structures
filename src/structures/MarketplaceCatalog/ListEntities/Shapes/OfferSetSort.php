<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Name'|'State'|'ReleaseDate'|'SolutionId'|'EntityId'|'LastModifiedDate'|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 */
class OfferSetSort extends Shape
{
    /**
     * @param array{
     *     SortBy?: 'Name'|'State'|'ReleaseDate'|'SolutionId'|'EntityId'|'LastModifiedDate'|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
