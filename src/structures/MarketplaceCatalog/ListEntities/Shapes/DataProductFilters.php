<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataProductEntityIdFilter|null $EntityId
 * @property DataProductTitleFilter|null $ProductTitle
 * @property DataProductVisibilityFilter|null $Visibility
 * @property DataProductLastModifiedDateFilter|null $LastModifiedDate
 */
class DataProductFilters extends Shape
{
    /**
     * @param array{
     *     EntityId?: DataProductEntityIdFilter|null,
     *     ProductTitle?: DataProductTitleFilter|null,
     *     Visibility?: DataProductVisibilityFilter|null,
     *     LastModifiedDate?: DataProductLastModifiedDateFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
