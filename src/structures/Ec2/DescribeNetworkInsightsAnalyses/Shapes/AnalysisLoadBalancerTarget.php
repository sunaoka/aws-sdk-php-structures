<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Address
 * @property string|null $AvailabilityZone
 * @property AnalysisComponent|null $Instance
 * @property int<0, 65535>|null $Port
 */
class AnalysisLoadBalancerTarget extends Shape
{
    /**
     * @param array{
     *     Address?: string|null,
     *     AvailabilityZone?: string|null,
     *     Instance?: AnalysisComponent|null,
     *     Port?: int<0, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
