<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDeviceEc2Instances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deviceName
 * @property EbsInstanceBlockDevice|null $ebs
 */
class InstanceBlockDeviceMapping extends Shape
{
    /**
     * @param array{
     *     deviceName?: string|null,
     *     ebs?: EbsInstanceBlockDevice|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
