<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubsidiaryAuthorizationCreatedDateFilterDateRange|null $DateRange
 */
class SubsidiaryAuthorizationCreatedDateFilter extends Shape
{
    /**
     * @param array{DateRange?: SubsidiaryAuthorizationCreatedDateFilterDateRange|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
