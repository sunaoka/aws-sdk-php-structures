<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InstanceNetworkInterfaceAssociation $Association
 * @property InstanceNetworkInterfaceAttachment $Attachment
 * @property string $Description
 * @property list<GroupIdentifier> $Groups
 * @property list<InstanceIpv6Address> $Ipv6Addresses
 * @property string $MacAddress
 * @property string $NetworkInterfaceId
 * @property string $OwnerId
 * @property string $PrivateDnsName
 * @property string $PrivateIpAddress
 * @property list<InstancePrivateIpAddress> $PrivateIpAddresses
 * @property bool $SourceDestCheck
 * @property 'available'|'associated'|'attaching'|'in-use'|'detaching' $Status
 * @property string $SubnetId
 * @property string $VpcId
 * @property string $InterfaceType
 * @property list<InstanceIpv4Prefix> $Ipv4Prefixes
 * @property list<InstanceIpv6Prefix> $Ipv6Prefixes
 * @property ConnectionTrackingSpecificationResponse $ConnectionTrackingConfiguration
 * @property OperatorResponse $Operator
 */
class InstanceNetworkInterface extends Shape
{
    /**
     * @param array{
     *     Association?: InstanceNetworkInterfaceAssociation,
     *     Attachment?: InstanceNetworkInterfaceAttachment,
     *     Description?: string,
     *     Groups?: list<GroupIdentifier>,
     *     Ipv6Addresses?: list<InstanceIpv6Address>,
     *     MacAddress?: string,
     *     NetworkInterfaceId?: string,
     *     OwnerId?: string,
     *     PrivateDnsName?: string,
     *     PrivateIpAddress?: string,
     *     PrivateIpAddresses?: list<InstancePrivateIpAddress>,
     *     SourceDestCheck?: bool,
     *     Status?: 'available'|'associated'|'attaching'|'in-use'|'detaching',
     *     SubnetId?: string,
     *     VpcId?: string,
     *     InterfaceType?: string,
     *     Ipv4Prefixes?: list<InstanceIpv4Prefix>,
     *     Ipv6Prefixes?: list<InstanceIpv6Prefix>,
     *     ConnectionTrackingConfiguration?: ConnectionTrackingSpecificationResponse,
     *     Operator?: OperatorResponse
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
