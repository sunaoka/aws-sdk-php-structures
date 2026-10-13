<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\ExecuteTrainingOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AdamParamsConfig $adamParamsConfig
 */
class OptimizerStepConfig extends Shape
{
    /**
     * @param array{adamParamsConfig: AdamParamsConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
