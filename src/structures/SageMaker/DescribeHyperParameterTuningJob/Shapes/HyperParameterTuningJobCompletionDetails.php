<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NumberOfTrainingJobsObjectiveNotImproving
 * @property \Aws\Api\DateTimeResult|null $ConvergenceDetectedTime
 */
class HyperParameterTuningJobCompletionDetails extends Shape
{
    /**
     * @param array{
     *     NumberOfTrainingJobsObjectiveNotImproving?: int|null,
     *     ConvergenceDetectedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
