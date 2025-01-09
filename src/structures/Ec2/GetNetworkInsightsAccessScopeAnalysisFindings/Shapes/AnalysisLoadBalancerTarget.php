<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkInsightsAccessScopeAnalysisFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Address
 * @property string $AvailabilityZone
 * @property AnalysisComponent $Instance
 * @property int $Port
 */
class AnalysisLoadBalancerTarget extends Shape
{
    /**
     * @param array{
     *     Address?: string,
     *     AvailabilityZone?: string,
     *     Instance?: AnalysisComponent,
     *     Port?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
