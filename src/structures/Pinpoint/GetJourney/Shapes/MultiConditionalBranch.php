<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SimpleCondition|null $Condition
 * @property string|null $NextActivity
 */
class MultiConditionalBranch extends Shape
{
    /**
     * @param array{
     *     Condition?: SimpleCondition|null,
     *     NextActivity?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
