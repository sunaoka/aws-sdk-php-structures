<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Count
 * @property string $Name
 * @property string $Manufacturer
 * @property MediaDeviceMemoryInfo $MemoryInfo
 */
class MediaDeviceInfo extends Shape
{
    /**
     * @param array{
     *     Count?: int,
     *     Name?: string,
     *     Manufacturer?: string,
     *     MemoryInfo?: MediaDeviceMemoryInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
