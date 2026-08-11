<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HorizontalPodAutoscalerControllerVersionConfig|null $horizontalPodAutoscalerControllerConfig
 */
class KubeControllerManagerVersionConfig extends Shape
{
    /**
     * @param array{horizontalPodAutoscalerControllerConfig?: HorizontalPodAutoscalerControllerVersionConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
