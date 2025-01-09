<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContainerProductEntityIdFilter $EntityId
 * @property ContainerProductLastModifiedDateFilter $LastModifiedDate
 * @property ContainerProductTitleFilter $ProductTitle
 * @property ContainerProductVisibilityFilter $Visibility
 */
class ContainerProductFilters extends Shape
{
    /**
     * @param array{
     *     EntityId?: ContainerProductEntityIdFilter,
     *     LastModifiedDate?: ContainerProductLastModifiedDateFilter,
     *     ProductTitle?: ContainerProductTitleFilter,
     *     Visibility?: ContainerProductVisibilityFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
