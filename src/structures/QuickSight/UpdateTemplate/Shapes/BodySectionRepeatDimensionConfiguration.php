<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BodySectionDynamicCategoryDimensionConfiguration|null $DynamicCategoryDimensionConfiguration
 * @property BodySectionDynamicNumericDimensionConfiguration|null $DynamicNumericDimensionConfiguration
 */
class BodySectionRepeatDimensionConfiguration extends Shape
{
    /**
     * @param array{
     *     DynamicCategoryDimensionConfiguration?: BodySectionDynamicCategoryDimensionConfiguration|null,
     *     DynamicNumericDimensionConfiguration?: BodySectionDynamicNumericDimensionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
