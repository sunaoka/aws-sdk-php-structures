<?php

namespace Sunaoka\Aws\Structures\Ec2\StartNetworkInsightsAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $SequenceNumber
 * @property AnalysisAclRule $AclRule
 * @property AnalysisComponent $AttachedTo
 * @property AnalysisComponent $Component
 * @property AnalysisComponent $DestinationVpc
 * @property AnalysisPacketHeader $OutboundHeader
 * @property AnalysisPacketHeader $InboundHeader
 * @property AnalysisRouteTableRoute $RouteTableRoute
 * @property AnalysisSecurityGroupRule $SecurityGroupRule
 * @property AnalysisComponent $SourceVpc
 * @property AnalysisComponent $Subnet
 * @property AnalysisComponent $Vpc
 * @property list<AdditionalDetail> $AdditionalDetails
 * @property AnalysisComponent $TransitGateway
 * @property TransitGatewayRouteTableRoute $TransitGatewayRouteTableRoute
 * @property list<Explanation> $Explanations
 * @property AnalysisComponent $ElasticLoadBalancerListener
 * @property FirewallStatelessRule $FirewallStatelessRule
 * @property FirewallStatefulRule $FirewallStatefulRule
 * @property string $ServiceName
 */
class PathComponent extends Shape
{
    /**
     * @param array{
     *     SequenceNumber?: int,
     *     AclRule?: AnalysisAclRule,
     *     AttachedTo?: AnalysisComponent,
     *     Component?: AnalysisComponent,
     *     DestinationVpc?: AnalysisComponent,
     *     OutboundHeader?: AnalysisPacketHeader,
     *     InboundHeader?: AnalysisPacketHeader,
     *     RouteTableRoute?: AnalysisRouteTableRoute,
     *     SecurityGroupRule?: AnalysisSecurityGroupRule,
     *     SourceVpc?: AnalysisComponent,
     *     Subnet?: AnalysisComponent,
     *     Vpc?: AnalysisComponent,
     *     AdditionalDetails?: list<AdditionalDetail>,
     *     TransitGateway?: AnalysisComponent,
     *     TransitGatewayRouteTableRoute?: TransitGatewayRouteTableRoute,
     *     Explanations?: list<Explanation>,
     *     ElasticLoadBalancerListener?: AnalysisComponent,
     *     FirewallStatelessRule?: FirewallStatelessRule,
     *     FirewallStatefulRule?: FirewallStatefulRule,
     *     ServiceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
