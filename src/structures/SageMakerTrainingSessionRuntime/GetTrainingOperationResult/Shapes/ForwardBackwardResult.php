<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\GetTrainingOperationResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lossFnOutputType
 * @property list<array<string, TensorData>>|null $lossFnOutputs
 * @property array<string, double>|null $metrics
 * @property TrainingTokenUsage|null $tokenUsage
 */
class ForwardBackwardResult extends Shape
{
    /**
     * @param array{
     *     lossFnOutputType?: string|null,
     *     lossFnOutputs?: list<array<string, TensorData>>|null,
     *     metrics?: array<string, double>|null,
     *     tokenUsage?: TrainingTokenUsage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
