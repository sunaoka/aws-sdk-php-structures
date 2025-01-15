<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $TargetObjectiveMetricValue
 * @property BestObjectiveNotImproving|null $BestObjectiveNotImproving
 * @property ConvergenceDetected|null $ConvergenceDetected
 */
class TuningJobCompletionCriteria extends Shape
{
    /**
     * @param array{
     *     TargetObjectiveMetricValue?: float|null,
     *     BestObjectiveNotImproving?: BestObjectiveNotImproving|null,
     *     ConvergenceDetected?: ConvergenceDetected|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
