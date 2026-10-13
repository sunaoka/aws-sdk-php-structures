<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\GetTrainingOperationResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, double>|null $metrics
 */
class OptimizerStepResult extends Shape
{
    /**
     * @param array{metrics?: array<string, double>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
