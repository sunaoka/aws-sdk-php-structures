<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\SearchProducts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property int $ApproximateCount
 */
class ProductViewAggregationValue extends Shape
{
    /**
     * @param array{
     *     Value?: string,
     *     ApproximateCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
