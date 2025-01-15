<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\SearchProducts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 * @property int|null $ApproximateCount
 */
class ProductViewAggregationValue extends Shape
{
    /**
     * @param array{
     *     Value?: string|null,
     *     ApproximateCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
