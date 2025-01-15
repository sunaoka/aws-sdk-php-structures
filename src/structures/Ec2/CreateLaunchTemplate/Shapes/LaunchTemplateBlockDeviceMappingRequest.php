<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceName
 * @property string|null $VirtualName
 * @property LaunchTemplateEbsBlockDeviceRequest|null $Ebs
 * @property string|null $NoDevice
 */
class LaunchTemplateBlockDeviceMappingRequest extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string|null,
     *     VirtualName?: string|null,
     *     Ebs?: LaunchTemplateEbsBlockDeviceRequest|null,
     *     NoDevice?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
