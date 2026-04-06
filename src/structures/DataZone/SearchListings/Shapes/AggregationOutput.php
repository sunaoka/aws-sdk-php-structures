<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $attribute
 * @property string|null $displayValue
 * @property list<AggregationOutputItem>|null $items
 */
class AggregationOutput extends Shape
{
    /**
     * @param array{
     *     attribute?: string|null,
     *     displayValue?: string|null,
     *     items?: list<AggregationOutputItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
