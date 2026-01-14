<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $value
 * @property int|null $count
 * @property string|null $displayValue
 */
class AggregationOutputItem extends Shape
{
    /**
     * @param array{
     *     value?: string|null,
     *     count?: int|null,
     *     displayValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
