<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TagCondition>|null $TagConditions
 */
class CategoriesAttributeAndCondition extends Shape
{
    /**
     * @param array{TagConditions?: list<TagCondition>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
