<?php

namespace Sunaoka\Aws\Structures\Outposts\UpdateQuote\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<QuoteCapacity>|null $ExistingCapacities
 * @property list<QuoteCapacity>|null $FinalCapacities
 * @property list<QuoteCapacity>|null $CapacityChange
 */
class CapacitySummary extends Shape
{
    /**
     * @param array{
     *     ExistingCapacities?: list<QuoteCapacity>|null,
     *     FinalCapacities?: list<QuoteCapacity>|null,
     *     CapacityChange?: list<QuoteCapacity>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
