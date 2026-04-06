<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceName
 * @property EbsInstanceBlockDeviceSpecification|null $Ebs
 * @property string|null $NoDevice
 * @property string|null $VirtualName
 */
class InstanceBlockDeviceMappingSpecification extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string|null,
     *     Ebs?: EbsInstanceBlockDeviceSpecification|null,
     *     NoDevice?: string|null,
     *     VirtualName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
