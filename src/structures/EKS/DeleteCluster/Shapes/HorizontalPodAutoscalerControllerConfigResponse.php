<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $horizontalPodAutoscalerSyncPeriod
 */
class HorizontalPodAutoscalerControllerConfigResponse extends Shape
{
    /**
     * @param array{horizontalPodAutoscalerSyncPeriod?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
