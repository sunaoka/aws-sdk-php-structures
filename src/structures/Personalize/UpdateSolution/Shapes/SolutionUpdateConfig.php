<?php

namespace Sunaoka\Aws\Structures\Personalize\UpdateSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoTrainingConfig|null $autoTrainingConfig
 */
class SolutionUpdateConfig extends Shape
{
    /**
     * @param array{autoTrainingConfig?: AutoTrainingConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
