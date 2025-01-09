<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ModelDataDownloadTimeoutInSeconds
 * @property int $ContainerStartupHealthCheckTimeoutInSeconds
 */
class InferenceComponentStartupParameters extends Shape
{
    /**
     * @param array{
     *     ModelDataDownloadTimeoutInSeconds?: int,
     *     ContainerStartupHealthCheckTimeoutInSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
