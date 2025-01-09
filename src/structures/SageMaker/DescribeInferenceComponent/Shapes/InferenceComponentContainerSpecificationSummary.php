<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeployedImage $DeployedImage
 * @property string $ArtifactUrl
 * @property array<string, string> $Environment
 */
class InferenceComponentContainerSpecificationSummary extends Shape
{
    /**
     * @param array{
     *     DeployedImage?: DeployedImage,
     *     ArtifactUrl?: string,
     *     Environment?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
