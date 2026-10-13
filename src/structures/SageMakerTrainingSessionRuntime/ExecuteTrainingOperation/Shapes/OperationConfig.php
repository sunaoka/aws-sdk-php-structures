<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\ExecuteTrainingOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ForwardConfig|null $forward
 * @property ForwardBackwardConfig|null $forwardBackward
 * @property OptimizerStepConfig|null $optimizerStep
 * @property SaveWeightsConfig|null $saveWeights
 * @property SaveStateConfig|null $saveState
 * @property LoadStateConfig|null $loadState
 */
class OperationConfig extends Shape
{
    /**
     * @param array{
     *     forward?: ForwardConfig|null,
     *     forwardBackward?: ForwardBackwardConfig|null,
     *     optimizerStep?: OptimizerStepConfig|null,
     *     saveWeights?: SaveWeightsConfig|null,
     *     saveState?: SaveStateConfig|null,
     *     loadState?: LoadStateConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
