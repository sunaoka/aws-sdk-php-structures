<?php

namespace Sunaoka\Aws\Structures\Ec2\GetLaunchTemplateData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceName
 * @property string $VirtualName
 * @property LaunchTemplateEbsBlockDevice $Ebs
 * @property string $NoDevice
 */
class LaunchTemplateBlockDeviceMapping extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string,
     *     VirtualName?: string,
     *     Ebs?: LaunchTemplateEbsBlockDevice,
     *     NoDevice?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
