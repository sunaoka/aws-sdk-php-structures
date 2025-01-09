<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalysisComponent $Acl
 * @property AnalysisAclRule $AclRule
 * @property string $Address
 * @property list<string> $Addresses
 * @property AnalysisComponent $AttachedTo
 * @property list<string> $AvailabilityZones
 * @property list<string> $Cidrs
 * @property AnalysisComponent $Component
 * @property AnalysisComponent $CustomerGateway
 * @property AnalysisComponent $Destination
 * @property AnalysisComponent $DestinationVpc
 * @property string $Direction
 * @property string $ExplanationCode
 * @property AnalysisComponent $IngressRouteTable
 * @property AnalysisComponent $InternetGateway
 * @property string $LoadBalancerArn
 * @property AnalysisLoadBalancerListener $ClassicLoadBalancerListener
 * @property int<0, 65535> $LoadBalancerListenerPort
 * @property AnalysisLoadBalancerTarget $LoadBalancerTarget
 * @property AnalysisComponent $LoadBalancerTargetGroup
 * @property list<AnalysisComponent> $LoadBalancerTargetGroups
 * @property int<0, 65535> $LoadBalancerTargetPort
 * @property AnalysisComponent $ElasticLoadBalancerListener
 * @property string $MissingComponent
 * @property AnalysisComponent $NatGateway
 * @property AnalysisComponent $NetworkInterface
 * @property string $PacketField
 * @property AnalysisComponent $VpcPeeringConnection
 * @property int<0, 65535> $Port
 * @property list<PortRange> $PortRanges
 * @property AnalysisComponent $PrefixList
 * @property list<string> $Protocols
 * @property AnalysisRouteTableRoute $RouteTableRoute
 * @property AnalysisComponent $RouteTable
 * @property AnalysisComponent $SecurityGroup
 * @property AnalysisSecurityGroupRule $SecurityGroupRule
 * @property list<AnalysisComponent> $SecurityGroups
 * @property AnalysisComponent $SourceVpc
 * @property string $State
 * @property AnalysisComponent $Subnet
 * @property AnalysisComponent $SubnetRouteTable
 * @property AnalysisComponent $Vpc
 * @property AnalysisComponent $VpcEndpoint
 * @property AnalysisComponent $VpnConnection
 * @property AnalysisComponent $VpnGateway
 * @property AnalysisComponent $TransitGateway
 * @property AnalysisComponent $TransitGatewayRouteTable
 * @property TransitGatewayRouteTableRoute $TransitGatewayRouteTableRoute
 * @property AnalysisComponent $TransitGatewayAttachment
 * @property string $ComponentAccount
 * @property string $ComponentRegion
 * @property FirewallStatelessRule $FirewallStatelessRule
 * @property FirewallStatefulRule $FirewallStatefulRule
 */
class Explanation extends Shape
{
    /**
     * @param array{
     *     Acl?: AnalysisComponent,
     *     AclRule?: AnalysisAclRule,
     *     Address?: string,
     *     Addresses?: list<string>,
     *     AttachedTo?: AnalysisComponent,
     *     AvailabilityZones?: list<string>,
     *     Cidrs?: list<string>,
     *     Component?: AnalysisComponent,
     *     CustomerGateway?: AnalysisComponent,
     *     Destination?: AnalysisComponent,
     *     DestinationVpc?: AnalysisComponent,
     *     Direction?: string,
     *     ExplanationCode?: string,
     *     IngressRouteTable?: AnalysisComponent,
     *     InternetGateway?: AnalysisComponent,
     *     LoadBalancerArn?: string,
     *     ClassicLoadBalancerListener?: AnalysisLoadBalancerListener,
     *     LoadBalancerListenerPort?: int<0, 65535>,
     *     LoadBalancerTarget?: AnalysisLoadBalancerTarget,
     *     LoadBalancerTargetGroup?: AnalysisComponent,
     *     LoadBalancerTargetGroups?: list<AnalysisComponent>,
     *     LoadBalancerTargetPort?: int<0, 65535>,
     *     ElasticLoadBalancerListener?: AnalysisComponent,
     *     MissingComponent?: string,
     *     NatGateway?: AnalysisComponent,
     *     NetworkInterface?: AnalysisComponent,
     *     PacketField?: string,
     *     VpcPeeringConnection?: AnalysisComponent,
     *     Port?: int<0, 65535>,
     *     PortRanges?: list<PortRange>,
     *     PrefixList?: AnalysisComponent,
     *     Protocols?: list<string>,
     *     RouteTableRoute?: AnalysisRouteTableRoute,
     *     RouteTable?: AnalysisComponent,
     *     SecurityGroup?: AnalysisComponent,
     *     SecurityGroupRule?: AnalysisSecurityGroupRule,
     *     SecurityGroups?: list<AnalysisComponent>,
     *     SourceVpc?: AnalysisComponent,
     *     State?: string,
     *     Subnet?: AnalysisComponent,
     *     SubnetRouteTable?: AnalysisComponent,
     *     Vpc?: AnalysisComponent,
     *     VpcEndpoint?: AnalysisComponent,
     *     VpnConnection?: AnalysisComponent,
     *     VpnGateway?: AnalysisComponent,
     *     TransitGateway?: AnalysisComponent,
     *     TransitGatewayRouteTable?: AnalysisComponent,
     *     TransitGatewayRouteTableRoute?: TransitGatewayRouteTableRoute,
     *     TransitGatewayAttachment?: AnalysisComponent,
     *     ComponentAccount?: string,
     *     ComponentRegion?: string,
     *     FirewallStatelessRule?: FirewallStatelessRule,
     *     FirewallStatefulRule?: FirewallStatefulRule
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
