<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\GetTrainingOperationResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $modelPackageArn
 */
class SaveWeightsResult extends Shape
{
    /**
     * @param array{modelPackageArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
