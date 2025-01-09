<?php

namespace Sunaoka\Aws\Structures\Ec2\StartNetworkInsightsAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535> $LoadBalancerPort
 * @property int<0, 65535> $InstancePort
 */
class AnalysisLoadBalancerListener extends Shape
{
    /**
     * @param array{
     *     LoadBalancerPort?: int<0, 65535>,
     *     InstancePort?: int<0, 65535>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
