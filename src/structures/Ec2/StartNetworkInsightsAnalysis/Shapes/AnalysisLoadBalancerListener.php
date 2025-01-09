<?php

namespace Sunaoka\Aws\Structures\Ec2\StartNetworkInsightsAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $LoadBalancerPort
 * @property int $InstancePort
 */
class AnalysisLoadBalancerListener extends Shape
{
    /**
     * @param array{
     *     LoadBalancerPort?: int,
     *     InstancePort?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
