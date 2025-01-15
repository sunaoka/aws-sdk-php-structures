<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AssignIpv6AddressOnCreation
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property int|null $AvailableIpAddressCount
 * @property string|null $CidrBlock
 * @property bool|null $DefaultForAz
 * @property bool|null $MapPublicIpOnLaunch
 * @property string|null $OwnerId
 * @property string|null $State
 * @property string|null $SubnetArn
 * @property string|null $SubnetId
 * @property string|null $VpcId
 * @property list<Ipv6CidrBlockAssociation>|null $Ipv6CidrBlockAssociationSet
 */
class AwsEc2SubnetDetails extends Shape
{
    /**
     * @param array{
     *     AssignIpv6AddressOnCreation?: bool|null,
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     AvailableIpAddressCount?: int|null,
     *     CidrBlock?: string|null,
     *     DefaultForAz?: bool|null,
     *     MapPublicIpOnLaunch?: bool|null,
     *     OwnerId?: string|null,
     *     State?: string|null,
     *     SubnetArn?: string|null,
     *     SubnetId?: string|null,
     *     VpcId?: string|null,
     *     Ipv6CidrBlockAssociationSet?: list<Ipv6CidrBlockAssociation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
