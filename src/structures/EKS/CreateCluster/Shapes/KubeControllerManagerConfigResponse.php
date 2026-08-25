<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PodGcControllerConfigResponse|null $podGcControllerConfig
 * @property HorizontalPodAutoscalerControllerConfigResponse|null $horizontalPodAutoscalerControllerConfig
 */
class KubeControllerManagerConfigResponse extends Shape
{
    /**
     * @param array{
     *     podGcControllerConfig?: PodGcControllerConfigResponse|null,
     *     horizontalPodAutoscalerControllerConfig?: HorizontalPodAutoscalerControllerConfigResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
