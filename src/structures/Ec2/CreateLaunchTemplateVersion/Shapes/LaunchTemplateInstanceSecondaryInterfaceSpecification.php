<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DeleteOnTermination
 * @property int|null $DeviceIndex
 * @property list<SecondaryInterfacePrivateIpAddressSpecification>|null $PrivateIpAddresses
 * @property int|null $PrivateIpAddressCount
 * @property string|null $SecondarySubnetId
 * @property 'secondary'|null $InterfaceType
 * @property int|null $NetworkCardIndex
 */
class LaunchTemplateInstanceSecondaryInterfaceSpecification extends Shape
{
    /**
     * @param array{
     *     DeleteOnTermination?: bool|null,
     *     DeviceIndex?: int|null,
     *     PrivateIpAddresses?: list<SecondaryInterfacePrivateIpAddressSpecification>|null,
     *     PrivateIpAddressCount?: int|null,
     *     SecondarySubnetId?: string|null,
     *     InterfaceType?: 'secondary'|null,
     *     NetworkCardIndex?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
