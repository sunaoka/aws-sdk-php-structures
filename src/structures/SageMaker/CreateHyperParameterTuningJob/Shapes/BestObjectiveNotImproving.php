<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<3, max> $MaxNumberOfTrainingJobsNotImproving
 */
class BestObjectiveNotImproving extends Shape
{
    /**
     * @param array{MaxNumberOfTrainingJobsNotImproving?: int<3, max>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
