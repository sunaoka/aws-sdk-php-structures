<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceName
 * @property string $VirtualName
 * @property LaunchTemplateEbsBlockDeviceRequest $Ebs
 * @property string $NoDevice
 */
class LaunchTemplateBlockDeviceMappingRequest extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string,
     *     VirtualName?: string,
     *     Ebs?: LaunchTemplateEbsBlockDeviceRequest,
     *     NoDevice?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
