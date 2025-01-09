<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResaleAuthorizationCreatedDateFilterDateRange $DateRange
 * @property list<string> $ValueList
 */
class ResaleAuthorizationCreatedDateFilter extends Shape
{
    /**
     * @param array{
     *     DateRange?: ResaleAuthorizationCreatedDateFilterDateRange,
     *     ValueList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
