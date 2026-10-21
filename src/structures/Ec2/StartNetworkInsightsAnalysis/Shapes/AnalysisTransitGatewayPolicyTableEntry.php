<?php

namespace Sunaoka\Aws\Structures\Ec2\StartNetworkInsightsAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $RuleNumber
 * @property string|null $Protocol
 * @property string|null $SourceCidr
 * @property string|null $DestinationCidr
 * @property PortRange|null $SourcePortRange
 * @property PortRange|null $DestinationPortRange
 * @property string|null $TargetRouteTableId
 */
class AnalysisTransitGatewayPolicyTableEntry extends Shape
{
    /**
     * @param array{
     *     RuleNumber?: int|null,
     *     Protocol?: string|null,
     *     SourceCidr?: string|null,
     *     DestinationCidr?: string|null,
     *     SourcePortRange?: PortRange|null,
     *     DestinationPortRange?: PortRange|null,
     *     TargetRouteTableId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
