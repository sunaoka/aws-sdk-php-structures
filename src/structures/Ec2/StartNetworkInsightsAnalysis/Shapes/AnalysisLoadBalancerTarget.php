<?php

namespace Sunaoka\Aws\Structures\Ec2\StartNetworkInsightsAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Address
 * @property string $AvailabilityZone
 * @property AnalysisComponent $Instance
 * @property int<0, 65535> $Port
 */
class AnalysisLoadBalancerTarget extends Shape
{
    /**
     * @param array{
     *     Address?: string,
     *     AvailabilityZone?: string,
     *     Instance?: AnalysisComponent,
     *     Port?: int<0, 65535>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
