<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InstanceNetworkInterfaceAssociation|null $Association
 * @property InstanceNetworkInterfaceAttachment|null $Attachment
 * @property string|null $Description
 * @property list<GroupIdentifier>|null $Groups
 * @property list<InstanceIpv6Address>|null $Ipv6Addresses
 * @property string|null $MacAddress
 * @property string|null $NetworkInterfaceId
 * @property string|null $OwnerId
 * @property string|null $PrivateDnsName
 * @property string|null $PrivateIpAddress
 * @property list<InstancePrivateIpAddress>|null $PrivateIpAddresses
 * @property bool|null $SourceDestCheck
 * @property 'available'|'associated'|'attaching'|'in-use'|'detaching'|null $Status
 * @property string|null $SubnetId
 * @property string|null $VpcId
 * @property string|null $InterfaceType
 * @property list<InstanceIpv4Prefix>|null $Ipv4Prefixes
 * @property list<InstanceIpv6Prefix>|null $Ipv6Prefixes
 * @property ConnectionTrackingSpecificationResponse|null $ConnectionTrackingConfiguration
 * @property OperatorResponse|null $Operator
 */
class InstanceNetworkInterface extends Shape
{
    /**
     * @param array{
     *     Association?: InstanceNetworkInterfaceAssociation|null,
     *     Attachment?: InstanceNetworkInterfaceAttachment|null,
     *     Description?: string|null,
     *     Groups?: list<GroupIdentifier>|null,
     *     Ipv6Addresses?: list<InstanceIpv6Address>|null,
     *     MacAddress?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     OwnerId?: string|null,
     *     PrivateDnsName?: string|null,
     *     PrivateIpAddress?: string|null,
     *     PrivateIpAddresses?: list<InstancePrivateIpAddress>|null,
     *     SourceDestCheck?: bool|null,
     *     Status?: 'available'|'associated'|'attaching'|'in-use'|'detaching'|null,
     *     SubnetId?: string|null,
     *     VpcId?: string|null,
     *     InterfaceType?: string|null,
     *     Ipv4Prefixes?: list<InstanceIpv4Prefix>|null,
     *     Ipv6Prefixes?: list<InstanceIpv6Prefix>|null,
     *     ConnectionTrackingConfiguration?: ConnectionTrackingSpecificationResponse|null,
     *     Operator?: OperatorResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
