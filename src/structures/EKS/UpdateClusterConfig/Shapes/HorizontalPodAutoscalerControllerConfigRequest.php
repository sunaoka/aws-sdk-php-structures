<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateClusterConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $horizontalPodAutoscalerSyncPeriod
 */
class HorizontalPodAutoscalerControllerConfigRequest extends Shape
{
    /**
     * @param array{horizontalPodAutoscalerSyncPeriod?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
