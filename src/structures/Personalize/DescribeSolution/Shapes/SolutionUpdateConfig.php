<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoTrainingConfig $autoTrainingConfig
 */
class SolutionUpdateConfig extends Shape
{
    /**
     * @param array{autoTrainingConfig?: AutoTrainingConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
