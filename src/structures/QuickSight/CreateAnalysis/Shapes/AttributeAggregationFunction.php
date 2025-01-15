<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UNIQUE_VALUE'|null $SimpleAttributeAggregation
 * @property string|null $ValueForMultipleValues
 */
class AttributeAggregationFunction extends Shape
{
    /**
     * @param array{
     *     SimpleAttributeAggregation?: 'UNIQUE_VALUE'|null,
     *     ValueForMultipleValues?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
