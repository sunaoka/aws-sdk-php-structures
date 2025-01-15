<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<3, max>|null $MaxNumberOfTrainingJobsNotImproving
 */
class BestObjectiveNotImproving extends Shape
{
    /**
     * @param array{MaxNumberOfTrainingJobsNotImproving?: int<3, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
