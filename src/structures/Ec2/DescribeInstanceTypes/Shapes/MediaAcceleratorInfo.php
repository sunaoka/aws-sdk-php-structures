<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MediaDeviceInfo> $Accelerators
 * @property int $TotalMediaMemoryInMiB
 */
class MediaAcceleratorInfo extends Shape
{
    /**
     * @param array{
     *     Accelerators?: list<MediaDeviceInfo>,
     *     TotalMediaMemoryInMiB?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
