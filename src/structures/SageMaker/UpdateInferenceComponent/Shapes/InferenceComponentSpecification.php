<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelName
 * @property InferenceComponentContainerSpecification|null $Container
 * @property InferenceComponentStartupParameters|null $StartupParameters
 * @property InferenceComponentComputeResourceRequirements $ComputeResourceRequirements
 */
class InferenceComponentSpecification extends Shape
{
    /**
     * @param array{
     *     ModelName?: string|null,
     *     Container?: InferenceComponentContainerSpecification|null,
     *     StartupParameters?: InferenceComponentStartupParameters|null,
     *     ComputeResourceRequirements: InferenceComponentComputeResourceRequirements
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
