<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmiProductEntityIdFilter $EntityId
 * @property AmiProductLastModifiedDateFilter $LastModifiedDate
 * @property AmiProductTitleFilter $ProductTitle
 * @property AmiProductVisibilityFilter $Visibility
 */
class AmiProductFilters extends Shape
{
    /**
     * @param array{
     *     EntityId?: AmiProductEntityIdFilter,
     *     LastModifiedDate?: AmiProductLastModifiedDateFilter,
     *     ProductTitle?: AmiProductTitleFilter,
     *     Visibility?: AmiProductVisibilityFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
