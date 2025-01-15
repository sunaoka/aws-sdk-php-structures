<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MediaDeviceInfo>|null $Accelerators
 * @property int|null $TotalMediaMemoryInMiB
 */
class MediaAcceleratorInfo extends Shape
{
    /**
     * @param array{
     *     Accelerators?: list<MediaDeviceInfo>|null,
     *     TotalMediaMemoryInMiB?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
