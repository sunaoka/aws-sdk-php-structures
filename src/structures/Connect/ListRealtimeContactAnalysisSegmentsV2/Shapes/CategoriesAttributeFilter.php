<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CategoriesAttributeAndCondition>|null $OrConditions
 * @property CategoriesAttributeAndCondition|null $AndCondition
 * @property TagCondition|null $TagCondition
 */
class CategoriesAttributeFilter extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<CategoriesAttributeAndCondition>|null,
     *     AndCondition?: CategoriesAttributeAndCondition|null,
     *     TagCondition?: TagCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
