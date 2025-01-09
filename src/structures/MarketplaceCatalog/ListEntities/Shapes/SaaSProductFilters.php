<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SaaSProductEntityIdFilter $EntityId
 * @property SaaSProductTitleFilter $ProductTitle
 * @property SaaSProductVisibilityFilter $Visibility
 * @property SaaSProductLastModifiedDateFilter $LastModifiedDate
 */
class SaaSProductFilters extends Shape
{
    /**
     * @param array{
     *     EntityId?: SaaSProductEntityIdFilter,
     *     ProductTitle?: SaaSProductTitleFilter,
     *     Visibility?: SaaSProductVisibilityFilter,
     *     LastModifiedDate?: SaaSProductLastModifiedDateFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
