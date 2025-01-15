<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $SequenceNumber
 * @property AnalysisAclRule|null $AclRule
 * @property AnalysisComponent|null $AttachedTo
 * @property AnalysisComponent|null $Component
 * @property AnalysisComponent|null $DestinationVpc
 * @property AnalysisPacketHeader|null $OutboundHeader
 * @property AnalysisPacketHeader|null $InboundHeader
 * @property AnalysisRouteTableRoute|null $RouteTableRoute
 * @property AnalysisSecurityGroupRule|null $SecurityGroupRule
 * @property AnalysisComponent|null $SourceVpc
 * @property AnalysisComponent|null $Subnet
 * @property AnalysisComponent|null $Vpc
 * @property list<AdditionalDetail>|null $AdditionalDetails
 * @property AnalysisComponent|null $TransitGateway
 * @property TransitGatewayRouteTableRoute|null $TransitGatewayRouteTableRoute
 * @property list<Explanation>|null $Explanations
 * @property AnalysisComponent|null $ElasticLoadBalancerListener
 * @property FirewallStatelessRule|null $FirewallStatelessRule
 * @property FirewallStatefulRule|null $FirewallStatefulRule
 * @property string|null $ServiceName
 */
class PathComponent extends Shape
{
    /**
     * @param array{
     *     SequenceNumber?: int|null,
     *     AclRule?: AnalysisAclRule|null,
     *     AttachedTo?: AnalysisComponent|null,
     *     Component?: AnalysisComponent|null,
     *     DestinationVpc?: AnalysisComponent|null,
     *     OutboundHeader?: AnalysisPacketHeader|null,
     *     InboundHeader?: AnalysisPacketHeader|null,
     *     RouteTableRoute?: AnalysisRouteTableRoute|null,
     *     SecurityGroupRule?: AnalysisSecurityGroupRule|null,
     *     SourceVpc?: AnalysisComponent|null,
     *     Subnet?: AnalysisComponent|null,
     *     Vpc?: AnalysisComponent|null,
     *     AdditionalDetails?: list<AdditionalDetail>|null,
     *     TransitGateway?: AnalysisComponent|null,
     *     TransitGatewayRouteTableRoute?: TransitGatewayRouteTableRoute|null,
     *     Explanations?: list<Explanation>|null,
     *     ElasticLoadBalancerListener?: AnalysisComponent|null,
     *     FirewallStatelessRule?: FirewallStatelessRule|null,
     *     FirewallStatefulRule?: FirewallStatefulRule|null,
     *     ServiceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
