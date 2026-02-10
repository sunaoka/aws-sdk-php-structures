<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecondaryInterfaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property SecondaryInterfaceAttachment|null $Attachment
 * @property string|null $MacAddress
 * @property string|null $OwnerId
 * @property list<SecondaryInterfaceIpv4Address>|null $PrivateIpv4Addresses
 * @property string|null $SecondaryInterfaceId
 * @property string|null $SecondaryInterfaceArn
 * @property 'secondary'|null $SecondaryInterfaceType
 * @property string|null $SecondarySubnetId
 * @property string|null $SecondaryNetworkId
 * @property 'rdma'|null $SecondaryNetworkType
 * @property bool|null $SourceDestCheck
 * @property 'available'|'in-use'|null $Status
 * @property list<Tag>|null $Tags
 */
class SecondaryInterface extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     Attachment?: SecondaryInterfaceAttachment|null,
     *     MacAddress?: string|null,
     *     OwnerId?: string|null,
     *     PrivateIpv4Addresses?: list<SecondaryInterfaceIpv4Address>|null,
     *     SecondaryInterfaceId?: string|null,
     *     SecondaryInterfaceArn?: string|null,
     *     SecondaryInterfaceType?: 'secondary'|null,
     *     SecondarySubnetId?: string|null,
     *     SecondaryNetworkId?: string|null,
     *     SecondaryNetworkType?: 'rdma'|null,
     *     SourceDestCheck?: bool|null,
     *     Status?: 'available'|'in-use'|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
