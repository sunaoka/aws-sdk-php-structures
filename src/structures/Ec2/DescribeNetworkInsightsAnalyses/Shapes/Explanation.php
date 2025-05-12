<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalysisComponent|null $Acl
 * @property AnalysisAclRule|null $AclRule
 * @property string|null $Address
 * @property list<string>|null $Addresses
 * @property AnalysisComponent|null $AttachedTo
 * @property list<string>|null $AvailabilityZones
 * @property list<string>|null $AvailabilityZoneIds
 * @property list<string>|null $Cidrs
 * @property AnalysisComponent|null $Component
 * @property AnalysisComponent|null $CustomerGateway
 * @property AnalysisComponent|null $Destination
 * @property AnalysisComponent|null $DestinationVpc
 * @property string|null $Direction
 * @property string|null $ExplanationCode
 * @property AnalysisComponent|null $IngressRouteTable
 * @property AnalysisComponent|null $InternetGateway
 * @property string|null $LoadBalancerArn
 * @property AnalysisLoadBalancerListener|null $ClassicLoadBalancerListener
 * @property int<0, 65535>|null $LoadBalancerListenerPort
 * @property AnalysisLoadBalancerTarget|null $LoadBalancerTarget
 * @property AnalysisComponent|null $LoadBalancerTargetGroup
 * @property list<AnalysisComponent>|null $LoadBalancerTargetGroups
 * @property int<0, 65535>|null $LoadBalancerTargetPort
 * @property AnalysisComponent|null $ElasticLoadBalancerListener
 * @property string|null $MissingComponent
 * @property AnalysisComponent|null $NatGateway
 * @property AnalysisComponent|null $NetworkInterface
 * @property string|null $PacketField
 * @property AnalysisComponent|null $VpcPeeringConnection
 * @property int<0, 65535>|null $Port
 * @property list<PortRange>|null $PortRanges
 * @property AnalysisComponent|null $PrefixList
 * @property list<string>|null $Protocols
 * @property AnalysisRouteTableRoute|null $RouteTableRoute
 * @property AnalysisComponent|null $RouteTable
 * @property AnalysisComponent|null $SecurityGroup
 * @property AnalysisSecurityGroupRule|null $SecurityGroupRule
 * @property list<AnalysisComponent>|null $SecurityGroups
 * @property AnalysisComponent|null $SourceVpc
 * @property string|null $State
 * @property AnalysisComponent|null $Subnet
 * @property AnalysisComponent|null $SubnetRouteTable
 * @property AnalysisComponent|null $Vpc
 * @property AnalysisComponent|null $VpcEndpoint
 * @property AnalysisComponent|null $VpnConnection
 * @property AnalysisComponent|null $VpnGateway
 * @property AnalysisComponent|null $TransitGateway
 * @property AnalysisComponent|null $TransitGatewayRouteTable
 * @property TransitGatewayRouteTableRoute|null $TransitGatewayRouteTableRoute
 * @property AnalysisComponent|null $TransitGatewayAttachment
 * @property string|null $ComponentAccount
 * @property string|null $ComponentRegion
 * @property FirewallStatelessRule|null $FirewallStatelessRule
 * @property FirewallStatefulRule|null $FirewallStatefulRule
 */
class Explanation extends Shape
{
    /**
     * @param array{
     *     Acl?: AnalysisComponent|null,
     *     AclRule?: AnalysisAclRule|null,
     *     Address?: string|null,
     *     Addresses?: list<string>|null,
     *     AttachedTo?: AnalysisComponent|null,
     *     AvailabilityZones?: list<string>|null,
     *     AvailabilityZoneIds?: list<string>|null,
     *     Cidrs?: list<string>|null,
     *     Component?: AnalysisComponent|null,
     *     CustomerGateway?: AnalysisComponent|null,
     *     Destination?: AnalysisComponent|null,
     *     DestinationVpc?: AnalysisComponent|null,
     *     Direction?: string|null,
     *     ExplanationCode?: string|null,
     *     IngressRouteTable?: AnalysisComponent|null,
     *     InternetGateway?: AnalysisComponent|null,
     *     LoadBalancerArn?: string|null,
     *     ClassicLoadBalancerListener?: AnalysisLoadBalancerListener|null,
     *     LoadBalancerListenerPort?: int<0, 65535>|null,
     *     LoadBalancerTarget?: AnalysisLoadBalancerTarget|null,
     *     LoadBalancerTargetGroup?: AnalysisComponent|null,
     *     LoadBalancerTargetGroups?: list<AnalysisComponent>|null,
     *     LoadBalancerTargetPort?: int<0, 65535>|null,
     *     ElasticLoadBalancerListener?: AnalysisComponent|null,
     *     MissingComponent?: string|null,
     *     NatGateway?: AnalysisComponent|null,
     *     NetworkInterface?: AnalysisComponent|null,
     *     PacketField?: string|null,
     *     VpcPeeringConnection?: AnalysisComponent|null,
     *     Port?: int<0, 65535>|null,
     *     PortRanges?: list<PortRange>|null,
     *     PrefixList?: AnalysisComponent|null,
     *     Protocols?: list<string>|null,
     *     RouteTableRoute?: AnalysisRouteTableRoute|null,
     *     RouteTable?: AnalysisComponent|null,
     *     SecurityGroup?: AnalysisComponent|null,
     *     SecurityGroupRule?: AnalysisSecurityGroupRule|null,
     *     SecurityGroups?: list<AnalysisComponent>|null,
     *     SourceVpc?: AnalysisComponent|null,
     *     State?: string|null,
     *     Subnet?: AnalysisComponent|null,
     *     SubnetRouteTable?: AnalysisComponent|null,
     *     Vpc?: AnalysisComponent|null,
     *     VpcEndpoint?: AnalysisComponent|null,
     *     VpnConnection?: AnalysisComponent|null,
     *     VpnGateway?: AnalysisComponent|null,
     *     TransitGateway?: AnalysisComponent|null,
     *     TransitGatewayRouteTable?: AnalysisComponent|null,
     *     TransitGatewayRouteTableRoute?: TransitGatewayRouteTableRoute|null,
     *     TransitGatewayAttachment?: AnalysisComponent|null,
     *     ComponentAccount?: string|null,
     *     ComponentRegion?: string|null,
     *     FirewallStatelessRule?: FirewallStatelessRule|null,
     *     FirewallStatefulRule?: FirewallStatefulRule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
