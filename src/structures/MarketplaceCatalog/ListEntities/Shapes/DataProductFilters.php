<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataProductEntityIdFilter $EntityId
 * @property DataProductTitleFilter $ProductTitle
 * @property DataProductVisibilityFilter $Visibility
 * @property DataProductLastModifiedDateFilter $LastModifiedDate
 */
class DataProductFilters extends Shape
{
    /**
     * @param array{
     *     EntityId?: DataProductEntityIdFilter,
     *     ProductTitle?: DataProductTitleFilter,
     *     Visibility?: DataProductVisibilityFilter,
     *     LastModifiedDate?: DataProductLastModifiedDateFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
