<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceName
 * @property EbsInstanceBlockDevice|null $Ebs
 */
class InstanceBlockDeviceMapping extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string|null,
     *     Ebs?: EbsInstanceBlockDevice|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
