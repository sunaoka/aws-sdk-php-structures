<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkInterfaceAssociation|null $Association
 * @property NetworkInterfaceAttachment|null $Attachment
 * @property string|null $AvailabilityZone
 * @property ConnectionTrackingConfiguration|null $ConnectionTrackingConfiguration
 * @property string|null $Description
 * @property list<GroupIdentifier>|null $Groups
 * @property 'interface'|'natGateway'|'efa'|'efa-only'|'trunk'|'load_balancer'|'network_load_balancer'|'vpc_endpoint'|'branch'|'transit_gateway'|'lambda'|'quicksight'|'global_accelerator_managed'|'api_gateway_managed'|'gateway_load_balancer'|'gateway_load_balancer_endpoint'|'iot_rules_managed'|'aws_codestar_connections_managed'|null $InterfaceType
 * @property list<NetworkInterfaceIpv6Address>|null $Ipv6Addresses
 * @property string|null $MacAddress
 * @property string|null $NetworkInterfaceId
 * @property string|null $OutpostArn
 * @property string|null $OwnerId
 * @property string|null $PrivateDnsName
 * @property string|null $PrivateIpAddress
 * @property list<NetworkInterfacePrivateIpAddress>|null $PrivateIpAddresses
 * @property list<Ipv4PrefixSpecification>|null $Ipv4Prefixes
 * @property list<Ipv6PrefixSpecification>|null $Ipv6Prefixes
 * @property string|null $RequesterId
 * @property bool|null $RequesterManaged
 * @property bool|null $SourceDestCheck
 * @property 'available'|'associated'|'attaching'|'in-use'|'detaching'|null $Status
 * @property string|null $SubnetId
 * @property list<Tag>|null $TagSet
 * @property string|null $VpcId
 * @property bool|null $DenyAllIgwTraffic
 * @property bool|null $Ipv6Native
 * @property string|null $Ipv6Address
 * @property OperatorResponse|null $Operator
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     Association?: NetworkInterfaceAssociation|null,
     *     Attachment?: NetworkInterfaceAttachment|null,
     *     AvailabilityZone?: string|null,
     *     ConnectionTrackingConfiguration?: ConnectionTrackingConfiguration|null,
     *     Description?: string|null,
     *     Groups?: list<GroupIdentifier>|null,
     *     InterfaceType?: 'interface'|'natGateway'|'efa'|'efa-only'|'trunk'|'load_balancer'|'network_load_balancer'|'vpc_endpoint'|'branch'|'transit_gateway'|'lambda'|'quicksight'|'global_accelerator_managed'|'api_gateway_managed'|'gateway_load_balancer'|'gateway_load_balancer_endpoint'|'iot_rules_managed'|'aws_codestar_connections_managed'|null,
     *     Ipv6Addresses?: list<NetworkInterfaceIpv6Address>|null,
     *     MacAddress?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     OutpostArn?: string|null,
     *     OwnerId?: string|null,
     *     PrivateDnsName?: string|null,
     *     PrivateIpAddress?: string|null,
     *     PrivateIpAddresses?: list<NetworkInterfacePrivateIpAddress>|null,
     *     Ipv4Prefixes?: list<Ipv4PrefixSpecification>|null,
     *     Ipv6Prefixes?: list<Ipv6PrefixSpecification>|null,
     *     RequesterId?: string|null,
     *     RequesterManaged?: bool|null,
     *     SourceDestCheck?: bool|null,
     *     Status?: 'available'|'associated'|'attaching'|'in-use'|'detaching'|null,
     *     SubnetId?: string|null,
     *     TagSet?: list<Tag>|null,
     *     VpcId?: string|null,
     *     DenyAllIgwTraffic?: bool|null,
     *     Ipv6Native?: bool|null,
     *     Ipv6Address?: string|null,
     *     Operator?: OperatorResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
