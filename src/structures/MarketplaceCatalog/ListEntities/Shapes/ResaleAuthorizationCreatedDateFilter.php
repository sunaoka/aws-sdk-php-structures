<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResaleAuthorizationCreatedDateFilterDateRange|null $DateRange
 * @property list<string>|null $ValueList
 */
class ResaleAuthorizationCreatedDateFilter extends Shape
{
    /**
     * @param array{
     *     DateRange?: ResaleAuthorizationCreatedDateFilterDateRange|null,
     *     ValueList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
