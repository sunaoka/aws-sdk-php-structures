<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDefaultSubnet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZoneId
 * @property int|null $EnableLniAtDeviceIndex
 * @property bool|null $MapCustomerOwnedIpOnLaunch
 * @property string|null $CustomerOwnedIpv4Pool
 * @property string|null $OwnerId
 * @property bool|null $AssignIpv6AddressOnCreation
 * @property list<SubnetIpv6CidrBlockAssociation>|null $Ipv6CidrBlockAssociationSet
 * @property list<Tag>|null $Tags
 * @property string|null $SubnetArn
 * @property string|null $OutpostArn
 * @property bool|null $EnableDns64
 * @property bool|null $Ipv6Native
 * @property PrivateDnsNameOptionsOnLaunch|null $PrivateDnsNameOptionsOnLaunch
 * @property BlockPublicAccessStates|null $BlockPublicAccessStates
 * @property string|null $SubnetId
 * @property 'pending'|'available'|'unavailable'|null $State
 * @property string|null $VpcId
 * @property string|null $CidrBlock
 * @property int|null $AvailableIpAddressCount
 * @property string|null $AvailabilityZone
 * @property bool|null $DefaultForAz
 * @property bool|null $MapPublicIpOnLaunch
 */
class Subnet extends Shape
{
    /**
     * @param array{
     *     AvailabilityZoneId?: string|null,
     *     EnableLniAtDeviceIndex?: int|null,
     *     MapCustomerOwnedIpOnLaunch?: bool|null,
     *     CustomerOwnedIpv4Pool?: string|null,
     *     OwnerId?: string|null,
     *     AssignIpv6AddressOnCreation?: bool|null,
     *     Ipv6CidrBlockAssociationSet?: list<SubnetIpv6CidrBlockAssociation>|null,
     *     Tags?: list<Tag>|null,
     *     SubnetArn?: string|null,
     *     OutpostArn?: string|null,
     *     EnableDns64?: bool|null,
     *     Ipv6Native?: bool|null,
     *     PrivateDnsNameOptionsOnLaunch?: PrivateDnsNameOptionsOnLaunch|null,
     *     BlockPublicAccessStates?: BlockPublicAccessStates|null,
     *     SubnetId?: string|null,
     *     State?: 'pending'|'available'|'unavailable'|null,
     *     VpcId?: string|null,
     *     CidrBlock?: string|null,
     *     AvailableIpAddressCount?: int|null,
     *     AvailabilityZone?: string|null,
     *     DefaultForAz?: bool|null,
     *     MapPublicIpOnLaunch?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
