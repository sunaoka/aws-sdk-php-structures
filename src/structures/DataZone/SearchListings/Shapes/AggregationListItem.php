<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attribute
 * @property string|null $displayValue
 */
class AggregationListItem extends Shape
{
    /**
     * @param array{
     *     attribute: string,
     *     displayValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
