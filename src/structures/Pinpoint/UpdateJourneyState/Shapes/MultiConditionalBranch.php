<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourneyState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SimpleCondition $Condition
 * @property string $NextActivity
 */
class MultiConditionalBranch extends Shape
{
    /**
     * @param array{
     *     Condition?: SimpleCondition,
     *     NextActivity?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
