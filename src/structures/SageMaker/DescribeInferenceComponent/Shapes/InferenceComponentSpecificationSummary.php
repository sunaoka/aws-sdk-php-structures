<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelName
 * @property InferenceComponentContainerSpecificationSummary $Container
 * @property InferenceComponentStartupParameters $StartupParameters
 * @property InferenceComponentComputeResourceRequirements $ComputeResourceRequirements
 * @property string $BaseInferenceComponentName
 */
class InferenceComponentSpecificationSummary extends Shape
{
    /**
     * @param array{
     *     ModelName?: string,
     *     Container?: InferenceComponentContainerSpecificationSummary,
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
