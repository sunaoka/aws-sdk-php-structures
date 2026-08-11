<?php

namespace Sunaoka\Aws\Structures\EKS\DeregisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HorizontalPodAutoscalerControllerConfigResponse|null $horizontalPodAutoscalerControllerConfig
 */
class KubeControllerManagerConfigResponse extends Shape
{
    /**
     * @param array{horizontalPodAutoscalerControllerConfig?: HorizontalPodAutoscalerControllerConfigResponse|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
