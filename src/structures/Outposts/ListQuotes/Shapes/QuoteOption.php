<?php

namespace Sunaoka\Aws\Structures\Outposts\ListQuotes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QuoteOptionIdentifier
 * @property list<QuoteCapacity>|null $Capacities
 * @property CapacitySummary|null $CapacitySummary
 * @property list<QuoteSpecification>|null $Specifications
 * @property list<PricingOption>|null $PricingOptions
 */
class QuoteOption extends Shape
{
    /**
     * @param array{
     *     QuoteOptionIdentifier?: string|null,
     *     Capacities?: list<QuoteCapacity>|null,
     *     CapacitySummary?: CapacitySummary|null,
     *     Specifications?: list<QuoteSpecification>|null,
     *     PricingOptions?: list<PricingOption>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
