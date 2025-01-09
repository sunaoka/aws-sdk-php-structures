<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BodySectionDynamicCategoryDimensionConfiguration $DynamicCategoryDimensionConfiguration
 * @property BodySectionDynamicNumericDimensionConfiguration $DynamicNumericDimensionConfiguration
 */
class BodySectionRepeatDimensionConfiguration extends Shape
{
    /**
     * @param array{
     *     DynamicCategoryDimensionConfiguration?: BodySectionDynamicCategoryDimensionConfiguration,
     *     DynamicNumericDimensionConfiguration?: BodySectionDynamicNumericDimensionConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
