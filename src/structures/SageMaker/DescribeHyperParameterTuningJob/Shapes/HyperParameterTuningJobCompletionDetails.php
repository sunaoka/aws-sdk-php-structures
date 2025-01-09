<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NumberOfTrainingJobsObjectiveNotImproving
 * @property \Aws\Api\DateTimeResult $ConvergenceDetectedTime
 */
class HyperParameterTuningJobCompletionDetails extends Shape
{
    /**
     * @param array{
     *     NumberOfTrainingJobsObjectiveNotImproving?: int,
     *     ConvergenceDetectedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
