<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1000000>|null $terminatedPodGcThreshold
 */
class PodGcControllerConfigResponse extends Shape
{
    /**
     * @param array{terminatedPodGcThreshold?: int<1, 1000000>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
