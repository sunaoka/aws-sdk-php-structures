<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $TargetObjectiveMetricValue
 * @property BestObjectiveNotImproving $BestObjectiveNotImproving
 * @property ConvergenceDetected $ConvergenceDetected
 */
class TuningJobCompletionCriteria extends Shape
{
    /**
     * @param array{
     *     TargetObjectiveMetricValue?: float,
     *     BestObjectiveNotImproving?: BestObjectiveNotImproving,
     *     ConvergenceDetected?: ConvergenceDetected
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
