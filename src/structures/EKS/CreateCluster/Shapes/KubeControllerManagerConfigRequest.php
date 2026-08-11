<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HorizontalPodAutoscalerControllerConfigRequest|null $horizontalPodAutoscalerControllerConfig
 */
class KubeControllerManagerConfigRequest extends Shape
{
    /**
     * @param array{horizontalPodAutoscalerControllerConfig?: HorizontalPodAutoscalerControllerConfigRequest|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
