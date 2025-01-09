<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDeviceEc2Instances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deviceName
 * @property EbsInstanceBlockDevice $ebs
 */
class InstanceBlockDeviceMapping extends Shape
{
    /**
     * @param array{
     *     deviceName?: string,
     *     ebs?: EbsInstanceBlockDevice
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
