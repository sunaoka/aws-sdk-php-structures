<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSubnet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property int|null $AvailableIpAddressCount
 * @property string|null $CidrBlock
 * @property bool|null $DefaultForAz
 * @property int|null $EnableLniAtDeviceIndex
 * @property bool|null $MapPublicIpOnLaunch
 * @property bool|null $MapCustomerOwnedIpOnLaunch
 * @property string|null $CustomerOwnedIpv4Pool
 * @property 'pending'|'available'|'unavailable'|null $State
 * @property string|null $SubnetId
 * @property string|null $VpcId
 * @property string|null $OwnerId
 * @property bool|null $AssignIpv6AddressOnCreation
 * @property list<SubnetIpv6CidrBlockAssociation>|null $Ipv6CidrBlockAssociationSet
 * @property list<Tag>|null $Tags
 * @property string|null $SubnetArn
 * @property string|null $OutpostArn
 * @property bool|null $EnableDns64
 * @property bool|null $Ipv6Native
 * @property PrivateDnsNameOptionsOnLaunch|null $PrivateDnsNameOptionsOnLaunch
 */
class Subnet extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     AvailableIpAddressCount?: int|null,
     *     CidrBlock?: string|null,
     *     DefaultForAz?: bool|null,
     *     EnableLniAtDeviceIndex?: int|null,
     *     MapPublicIpOnLaunch?: bool|null,
     *     MapCustomerOwnedIpOnLaunch?: bool|null,
     *     CustomerOwnedIpv4Pool?: string|null,
     *     State?: 'pending'|'available'|'unavailable'|null,
     *     SubnetId?: string|null,
     *     VpcId?: string|null,
     *     OwnerId?: string|null,
     *     AssignIpv6AddressOnCreation?: bool|null,
     *     Ipv6CidrBlockAssociationSet?: list<SubnetIpv6CidrBlockAssociation>|null,
     *     Tags?: list<Tag>|null,
     *     SubnetArn?: string|null,
     *     OutpostArn?: string|null,
     *     EnableDns64?: bool|null,
     *     Ipv6Native?: bool|null,
     *     PrivateDnsNameOptionsOnLaunch?: PrivateDnsNameOptionsOnLaunch|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
