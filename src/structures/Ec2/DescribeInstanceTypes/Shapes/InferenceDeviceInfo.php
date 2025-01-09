<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Count
 * @property string $Name
 * @property string $Manufacturer
 * @property InferenceDeviceMemoryInfo $MemoryInfo
 */
class InferenceDeviceInfo extends Shape
{
    /**
     * @param array{
     *     Count?: int,
     *     Name?: string,
     *     Manufacturer?: string,
     *     MemoryInfo?: InferenceDeviceMemoryInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
