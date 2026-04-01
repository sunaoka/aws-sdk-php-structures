<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateGoal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property string $objectives
 */
class GoalContent extends Shape
{
    /**
     * @param array{
     *     description: string,
     *     objectives: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
