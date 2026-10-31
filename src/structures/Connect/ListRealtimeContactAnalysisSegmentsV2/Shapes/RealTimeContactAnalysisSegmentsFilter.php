<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CategoriesAttributeFilter|null $CategoriesAttributeFilter
 */
class RealTimeContactAnalysisSegmentsFilter extends Shape
{
    /**
     * @param array{CategoriesAttributeFilter?: CategoriesAttributeFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
