<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResaleAuthorizationAvailabilityEndDateFilterDateRange|null $DateRange
 * @property list<string>|null $ValueList
 */
class ResaleAuthorizationAvailabilityEndDateFilter extends Shape
{
    /**
     * @param array{
     *     DateRange?: ResaleAuthorizationAvailabilityEndDateFilterDateRange|null,
     *     ValueList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
