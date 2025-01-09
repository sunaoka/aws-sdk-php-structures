<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelName
 * @property InferenceComponentContainerSpecification $Container
 * @property InferenceComponentStartupParameters $StartupParameters
 * @property InferenceComponentComputeResourceRequirements $ComputeResourceRequirements
 * @property string $BaseInferenceComponentName
 */
class InferenceComponentSpecification extends Shape
{
    /**
     * @param array{
     *     ModelName?: string,
     *     Container?: InferenceComponentContainerSpecification,
     *     StartupParameters?: InferenceComponentStartupParameters,
     *     ComputeResourceRequirements?: InferenceComponentComputeResourceRequirements,
     *     BaseInferenceComponentName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
