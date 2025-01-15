<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceName
 * @property EbsInstanceBlockDeviceSpecification|null $Ebs
 * @property string|null $VirtualName
 * @property string|null $NoDevice
 */
class InstanceBlockDeviceMappingSpecification extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string|null,
     *     Ebs?: EbsInstanceBlockDeviceSpecification|null,
     *     VirtualName?: string|null,
     *     NoDevice?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
