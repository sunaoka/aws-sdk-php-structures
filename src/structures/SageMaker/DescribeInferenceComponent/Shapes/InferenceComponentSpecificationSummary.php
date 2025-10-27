<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelName
 * @property InferenceComponentContainerSpecificationSummary|null $Container
 * @property InferenceComponentStartupParameters|null $StartupParameters
 * @property InferenceComponentComputeResourceRequirements|null $ComputeResourceRequirements
 * @property string|null $BaseInferenceComponentName
 * @property InferenceComponentDataCacheConfigSummary|null $DataCacheConfig
 */
class InferenceComponentSpecificationSummary extends Shape
{
    /**
     * @param array{
     *     ModelName?: string|null,
     *     Container?: InferenceComponentContainerSpecificationSummary|null,
     *     StartupParameters?: InferenceComponentStartupParameters|null,
     *     ComputeResourceRequirements?: InferenceComponentComputeResourceRequirements|null,
     *     BaseInferenceComponentName?: string|null,
     *     DataCacheConfig?: InferenceComponentDataCacheConfigSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
