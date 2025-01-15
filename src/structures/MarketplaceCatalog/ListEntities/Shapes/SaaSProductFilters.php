<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SaaSProductEntityIdFilter|null $EntityId
 * @property SaaSProductTitleFilter|null $ProductTitle
 * @property SaaSProductVisibilityFilter|null $Visibility
 * @property SaaSProductLastModifiedDateFilter|null $LastModifiedDate
 */
class SaaSProductFilters extends Shape
{
    /**
     * @param array{
     *     EntityId?: SaaSProductEntityIdFilter|null,
     *     ProductTitle?: SaaSProductTitleFilter|null,
     *     Visibility?: SaaSProductVisibilityFilter|null,
     *     LastModifiedDate?: SaaSProductLastModifiedDateFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
