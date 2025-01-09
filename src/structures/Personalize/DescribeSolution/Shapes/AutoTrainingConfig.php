<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $schedulingExpression
 */
class AutoTrainingConfig extends Shape
{
    /**
     * @param array{schedulingExpression?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
