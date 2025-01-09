<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSubnets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZoneId
 * @property int $EnableLniAtDeviceIndex
 * @property bool $MapCustomerOwnedIpOnLaunch
 * @property string $CustomerOwnedIpv4Pool
 * @property string $OwnerId
 * @property bool $AssignIpv6AddressOnCreation
 * @property list<SubnetIpv6CidrBlockAssociation> $Ipv6CidrBlockAssociationSet
 * @property list<Tag> $Tags
 * @property string $SubnetArn
 * @property string $OutpostArn
 * @property bool $EnableDns64
 * @property bool $Ipv6Native
 * @property PrivateDnsNameOptionsOnLaunch $PrivateDnsNameOptionsOnLaunch
 * @property BlockPublicAccessStates $BlockPublicAccessStates
 * @property string $SubnetId
 * @property 'pending'|'available'|'unavailable' $State
 * @property string $VpcId
 * @property string $CidrBlock
 * @property int $AvailableIpAddressCount
 * @property string $AvailabilityZone
 * @property bool $DefaultForAz
 * @property bool $MapPublicIpOnLaunch
 */
class Subnet extends Shape
{
    /**
     * @param array{
     *     AvailabilityZoneId?: string,
     *     EnableLniAtDeviceIndex?: int,
     *     MapCustomerOwnedIpOnLaunch?: bool,
     *     CustomerOwnedIpv4Pool?: string,
     *     OwnerId?: string,
     *     AssignIpv6AddressOnCreation?: bool,
     *     Ipv6CidrBlockAssociationSet?: list<SubnetIpv6CidrBlockAssociation>,
     *     Tags?: list<Tag>,
     *     SubnetArn?: string,
     *     OutpostArn?: string,
     *     EnableDns64?: bool,
     *     Ipv6Native?: bool,
     *     PrivateDnsNameOptionsOnLaunch?: PrivateDnsNameOptionsOnLaunch,
     *     BlockPublicAccessStates?: BlockPublicAccessStates,
     *     SubnetId?: string,
     *     State?: 'pending'|'available'|'unavailable',
     *     VpcId?: string,
     *     CidrBlock?: string,
     *     AvailableIpAddressCount?: int,
     *     AvailabilityZone?: string,
     *     DefaultForAz?: bool,
     *     MapPublicIpOnLaunch?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
