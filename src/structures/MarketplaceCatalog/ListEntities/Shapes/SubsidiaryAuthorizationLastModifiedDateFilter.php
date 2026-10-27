<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubsidiaryAuthorizationLastModifiedDateFilterDateRange|null $DateRange
 */
class SubsidiaryAuthorizationLastModifiedDateFilter extends Shape
{
    /**
     * @param array{DateRange?: SubsidiaryAuthorizationLastModifiedDateFilterDateRange|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
