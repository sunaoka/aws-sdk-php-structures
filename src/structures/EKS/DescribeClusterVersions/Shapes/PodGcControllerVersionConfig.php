<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IntegerParameterConfig|null $terminatedPodGcThreshold
 */
class PodGcControllerVersionConfig extends Shape
{
    /**
     * @param array{terminatedPodGcThreshold?: IntegerParameterConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
