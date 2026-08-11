<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DurationParameterConfig|null $horizontalPodAutoscalerSyncPeriod
 */
class HorizontalPodAutoscalerControllerVersionConfig extends Shape
{
    /**
     * @param array{horizontalPodAutoscalerSyncPeriod?: DurationParameterConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
