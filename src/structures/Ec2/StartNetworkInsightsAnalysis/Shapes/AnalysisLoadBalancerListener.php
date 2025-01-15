<?php

namespace Sunaoka\Aws\Structures\Ec2\StartNetworkInsightsAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535>|null $LoadBalancerPort
 * @property int<0, 65535>|null $InstancePort
 */
class AnalysisLoadBalancerListener extends Shape
{
    /**
     * @param array{
     *     LoadBalancerPort?: int<0, 65535>|null,
     *     InstancePort?: int<0, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
