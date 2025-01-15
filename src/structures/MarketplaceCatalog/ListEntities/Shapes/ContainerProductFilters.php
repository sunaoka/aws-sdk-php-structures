<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContainerProductEntityIdFilter|null $EntityId
 * @property ContainerProductLastModifiedDateFilter|null $LastModifiedDate
 * @property ContainerProductTitleFilter|null $ProductTitle
 * @property ContainerProductVisibilityFilter|null $Visibility
 */
class ContainerProductFilters extends Shape
{
    /**
     * @param array{
     *     EntityId?: ContainerProductEntityIdFilter|null,
     *     LastModifiedDate?: ContainerProductLastModifiedDateFilter|null,
     *     ProductTitle?: ContainerProductTitleFilter|null,
     *     Visibility?: ContainerProductVisibilityFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
