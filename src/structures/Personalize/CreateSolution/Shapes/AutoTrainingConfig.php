<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $schedulingExpression
 */
class AutoTrainingConfig extends Shape
{
    /**
     * @param array{schedulingExpression?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
