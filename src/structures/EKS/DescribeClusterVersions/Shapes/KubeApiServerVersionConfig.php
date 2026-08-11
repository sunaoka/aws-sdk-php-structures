<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DurationParameterConfig|null $eventTtl
 * @property PortRangeParameterConfig|null $serviceNodePortRange
 */
class KubeApiServerVersionConfig extends Shape
{
    /**
     * @param array{
     *     eventTtl?: DurationParameterConfig|null,
     *     serviceNodePortRange?: PortRangeParameterConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
