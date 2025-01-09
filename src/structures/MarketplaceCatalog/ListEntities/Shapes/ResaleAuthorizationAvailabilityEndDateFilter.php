<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResaleAuthorizationAvailabilityEndDateFilterDateRange $DateRange
 * @property list<string> $ValueList
 */
class ResaleAuthorizationAvailabilityEndDateFilter extends Shape
{
    /**
     * @param array{
     *     DateRange?: ResaleAuthorizationAvailabilityEndDateFilterDateRange,
     *     ValueList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
