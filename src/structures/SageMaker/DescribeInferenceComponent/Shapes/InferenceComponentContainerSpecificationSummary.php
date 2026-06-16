<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeployedImage|null $DeployedImage
 * @property string|null $ArtifactUrl
 * @property array<string, string>|null $Environment
 * @property ContainerMetricsConfig|null $ContainerMetricsConfig
 */
class InferenceComponentContainerSpecificationSummary extends Shape
{
    /**
     * @param array{
     *     DeployedImage?: DeployedImage|null,
     *     ArtifactUrl?: string|null,
     *     Environment?: array<string, string>|null,
     *     ContainerMetricsConfig?: ContainerMetricsConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
