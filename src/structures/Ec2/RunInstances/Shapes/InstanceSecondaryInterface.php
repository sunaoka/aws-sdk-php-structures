<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InstanceSecondaryInterfaceAttachment|null $Attachment
 * @property string|null $MacAddress
 * @property string|null $SecondaryInterfaceId
 * @property string|null $OwnerId
 * @property list<InstanceSecondaryInterfacePrivateIpAddress>|null $PrivateIpAddresses
 * @property bool|null $SourceDestCheck
 * @property 'available'|'in-use'|null $Status
 * @property string|null $SecondarySubnetId
 * @property string|null $SecondaryNetworkId
 * @property 'secondary'|null $InterfaceType
 */
class InstanceSecondaryInterface extends Shape
{
    /**
     * @param array{
     *     Attachment?: InstanceSecondaryInterfaceAttachment|null,
     *     MacAddress?: string|null,
     *     SecondaryInterfaceId?: string|null,
     *     OwnerId?: string|null,
     *     PrivateIpAddresses?: list<InstanceSecondaryInterfacePrivateIpAddress>|null,
     *     SourceDestCheck?: bool|null,
     *     Status?: 'available'|'in-use'|null,
     *     SecondarySubnetId?: string|null,
     *     SecondaryNetworkId?: string|null,
     *     InterfaceType?: 'secondary'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
