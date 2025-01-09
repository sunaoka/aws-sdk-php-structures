<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxNumberOfTrainingJobsNotImproving
 */
class BestObjectiveNotImproving extends Shape
{
    /**
     * @param array{MaxNumberOfTrainingJobsNotImproving?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
