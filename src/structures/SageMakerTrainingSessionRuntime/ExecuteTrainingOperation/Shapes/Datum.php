<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\ExecuteTrainingOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelInput $modelInput
 * @property array<string, TensorData>|null $lossFnInputs
 */
class Datum extends Shape
{
    /**
     * @param array{
     *     modelInput: ModelInput,
     *     lossFnInputs?: array<string, TensorData>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
