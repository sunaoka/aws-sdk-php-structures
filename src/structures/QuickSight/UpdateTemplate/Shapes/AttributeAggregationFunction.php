<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UNIQUE_VALUE' $SimpleAttributeAggregation
 * @property string $ValueForMultipleValues
 */
class AttributeAggregationFunction extends Shape
{
    /**
     * @param array{
     *     SimpleAttributeAggregation?: 'UNIQUE_VALUE',
     *     ValueForMultipleValues?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
