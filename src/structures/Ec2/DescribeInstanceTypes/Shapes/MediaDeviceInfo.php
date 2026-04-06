<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Count
 * @property string|null $Name
 * @property string|null $Manufacturer
 * @property MediaDeviceMemoryInfo|null $MemoryInfo
 */
class MediaDeviceInfo extends Shape
{
    /**
     * @param array{
     *     Count?: int|null,
     *     Name?: string|null,
     *     Manufacturer?: string|null,
     *     MemoryInfo?: MediaDeviceMemoryInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
