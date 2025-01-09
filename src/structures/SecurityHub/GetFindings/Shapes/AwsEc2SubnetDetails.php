<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AssignIpv6AddressOnCreation
 * @property string $AvailabilityZone
 * @property string $AvailabilityZoneId
 * @property int $AvailableIpAddressCount
 * @property string $CidrBlock
 * @property bool $DefaultForAz
 * @property bool $MapPublicIpOnLaunch
 * @property string $OwnerId
 * @property string $State
 * @property string $SubnetArn
 * @property string $SubnetId
 * @property string $VpcId
 * @property list<Ipv6CidrBlockAssociation> $Ipv6CidrBlockAssociationSet
 */
class AwsEc2SubnetDetails extends Shape
{
    /**
     * @param array{
     *     AssignIpv6AddressOnCreation?: bool,
     *     AvailabilityZone?: string,
     *     AvailabilityZoneId?: string,
     *     AvailableIpAddressCount?: int,
     *     CidrBlock?: string,
     *     DefaultForAz?: bool,
     *     MapPublicIpOnLaunch?: bool,
     *     OwnerId?: string,
     *     State?: string,
     *     SubnetArn?: string,
     *     SubnetId?: string,
     *     VpcId?: string,
     *     Ipv6CidrBlockAssociationSet?: list<Ipv6CidrBlockAssociation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
