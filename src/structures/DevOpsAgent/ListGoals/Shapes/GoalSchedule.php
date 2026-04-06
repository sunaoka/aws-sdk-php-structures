<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListGoals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $state
 * @property string|null $expression
 */
class GoalSchedule extends Shape
{
    /**
     * @param array{
     *     state: 'ENABLED'|'DISABLED',
     *     expression?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
