<?php

namespace Sunaoka\Aws\Structures\Ec2\GetLaunchTemplateData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceName
 * @property string|null $VirtualName
 * @property LaunchTemplateEbsBlockDevice|null $Ebs
 * @property string|null $NoDevice
 */
class LaunchTemplateBlockDeviceMapping extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string|null,
     *     VirtualName?: string|null,
     *     Ebs?: LaunchTemplateEbsBlockDevice|null,
     *     NoDevice?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
