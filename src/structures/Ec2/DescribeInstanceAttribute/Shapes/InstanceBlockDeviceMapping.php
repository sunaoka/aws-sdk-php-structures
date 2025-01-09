<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceName
 * @property EbsInstanceBlockDevice $Ebs
 */
class InstanceBlockDeviceMapping extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string,
     *     Ebs?: EbsInstanceBlockDevice
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
