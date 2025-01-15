<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<60, 3600>|null $ModelDataDownloadTimeoutInSeconds
 * @property int<60, 3600>|null $ContainerStartupHealthCheckTimeoutInSeconds
 */
class InferenceComponentStartupParameters extends Shape
{
    /**
     * @param array{
     *     ModelDataDownloadTimeoutInSeconds?: int<60, 3600>|null,
     *     ContainerStartupHealthCheckTimeoutInSeconds?: int<60, 3600>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
