<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelName
 * @property InferenceComponentContainerSpecification|null $Container
 * @property InferenceComponentStartupParameters|null $StartupParameters
 * @property InferenceComponentComputeResourceRequirements|null $ComputeResourceRequirements
 * @property string|null $BaseInferenceComponentName
 */
class InferenceComponentSpecification extends Shape
{
    /**
     * @param array{
     *     ModelName?: string|null,
     *     Container?: InferenceComponentContainerSpecification|null,
     *     StartupParameters?: InferenceComponentStartupParameters|null,
     *     ComputeResourceRequirements?: InferenceComponentComputeResourceRequirements|null,
     *     BaseInferenceComponentName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
