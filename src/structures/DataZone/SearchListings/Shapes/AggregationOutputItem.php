<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $count
 * @property string|null $displayValue
 * @property string|null $value
 */
class AggregationOutputItem extends Shape
{
    /**
     * @param array{
     *     count?: int|null,
     *     displayValue?: string|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
