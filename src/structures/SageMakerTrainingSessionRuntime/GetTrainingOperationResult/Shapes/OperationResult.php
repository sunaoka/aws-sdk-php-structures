<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\GetTrainingOperationResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ForwardResult|null $forward
 * @property ForwardBackwardResult|null $forwardBackward
 * @property OptimizerStepResult|null $optimizerStep
 * @property SaveWeightsResult|null $saveWeights
 * @property SaveStateResult|null $saveState
 * @property LoadStateResult|null $loadState
 */
class OperationResult extends Shape
{
    /**
     * @param array{
     *     forward?: ForwardResult|null,
     *     forwardBackward?: ForwardBackwardResult|null,
     *     optimizerStep?: OptimizerStepResult|null,
     *     saveWeights?: SaveWeightsResult|null,
     *     saveState?: SaveStateResult|null,
     *     loadState?: LoadStateResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
