<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkInterfaceAssociation $Association
 * @property NetworkInterfaceAttachment $Attachment
 * @property string $AvailabilityZone
 * @property ConnectionTrackingConfiguration $ConnectionTrackingConfiguration
 * @property string $Description
 * @property list<GroupIdentifier> $Groups
 * @property 'interface'|'natGateway'|'efa'|'efa-only'|'trunk'|'load_balancer'|'network_load_balancer'|'vpc_endpoint'|'branch'|'transit_gateway'|'lambda'|'quicksight'|'global_accelerator_managed'|'api_gateway_managed'|'gateway_load_balancer'|'gateway_load_balancer_endpoint'|'iot_rules_managed'|'aws_codestar_connections_managed' $InterfaceType
 * @property list<NetworkInterfaceIpv6Address> $Ipv6Addresses
 * @property string $MacAddress
 * @property string $NetworkInterfaceId
 * @property string $OutpostArn
 * @property string $OwnerId
 * @property string $PrivateDnsName
 * @property string $PrivateIpAddress
 * @property list<NetworkInterfacePrivateIpAddress> $PrivateIpAddresses
 * @property list<Ipv4PrefixSpecification> $Ipv4Prefixes
 * @property list<Ipv6PrefixSpecification> $Ipv6Prefixes
 * @property string $RequesterId
 * @property bool $RequesterManaged
 * @property bool $SourceDestCheck
 * @property 'available'|'associated'|'attaching'|'in-use'|'detaching' $Status
 * @property string $SubnetId
 * @property list<Tag> $TagSet
 * @property string $VpcId
 * @property bool $DenyAllIgwTraffic
 * @property bool $Ipv6Native
 * @property string $Ipv6Address
 * @property OperatorResponse $Operator
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     Association?: NetworkInterfaceAssociation,
     *     Attachment?: NetworkInterfaceAttachment,
     *     AvailabilityZone?: string,
     *     ConnectionTrackingConfiguration?: ConnectionTrackingConfiguration,
     *     Description?: string,
     *     Groups?: list<GroupIdentifier>,
     *     InterfaceType?: 'interface'|'natGateway'|'efa'|'efa-only'|'trunk'|'load_balancer'|'network_load_balancer'|'vpc_endpoint'|'branch'|'transit_gateway'|'lambda'|'quicksight'|'global_accelerator_managed'|'api_gateway_managed'|'gateway_load_balancer'|'gateway_load_balancer_endpoint'|'iot_rules_managed'|'aws_codestar_connections_managed',
     *     Ipv6Addresses?: list<NetworkInterfaceIpv6Address>,
     *     MacAddress?: string,
     *     NetworkInterfaceId?: string,
     *     OutpostArn?: string,
     *     OwnerId?: string,
     *     PrivateDnsName?: string,
     *     PrivateIpAddress?: string,
     *     PrivateIpAddresses?: list<NetworkInterfacePrivateIpAddress>,
     *     Ipv4Prefixes?: list<Ipv4PrefixSpecification>,
     *     Ipv6Prefixes?: list<Ipv6PrefixSpecification>,
     *     RequesterId?: string,
     *     RequesterManaged?: bool,
     *     SourceDestCheck?: bool,
     *     Status?: 'available'|'associated'|'attaching'|'in-use'|'detaching',
     *     SubnetId?: string,
     *     TagSet?: list<Tag>,
     *     VpcId?: string,
     *     DenyAllIgwTraffic?: bool,
     *     Ipv6Native?: bool,
     *     Ipv6Address?: string,
     *     Operator?: OperatorResponse
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
