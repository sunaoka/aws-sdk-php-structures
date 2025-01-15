<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmiProductEntityIdFilter|null $EntityId
 * @property AmiProductLastModifiedDateFilter|null $LastModifiedDate
 * @property AmiProductTitleFilter|null $ProductTitle
 * @property AmiProductVisibilityFilter|null $Visibility
 */
class AmiProductFilters extends Shape
{
    /**
     * @param array{
     *     EntityId?: AmiProductEntityIdFilter|null,
     *     LastModifiedDate?: AmiProductLastModifiedDateFilter|null,
     *     ProductTitle?: AmiProductTitleFilter|null,
     *     Visibility?: AmiProductVisibilityFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
