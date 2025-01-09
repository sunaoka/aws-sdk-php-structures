<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceName
 * @property EbsInstanceBlockDeviceSpecification $Ebs
 * @property string $VirtualName
 * @property string $NoDevice
 */
class InstanceBlockDeviceMappingSpecification extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string,
     *     Ebs?: EbsInstanceBlockDeviceSpecification,
     *     VirtualName?: string,
     *     NoDevice?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
