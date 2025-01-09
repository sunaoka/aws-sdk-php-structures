<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RealTimeInference' $InfrastructureType
 * @property RealTimeInferenceConfig $RealTimeInferenceConfig
 */
class ModelInfrastructureConfig extends Shape
{
    /**
     * @param array{
     *     InfrastructureType: 'RealTimeInference',
     *     RealTimeInferenceConfig: RealTimeInferenceConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
