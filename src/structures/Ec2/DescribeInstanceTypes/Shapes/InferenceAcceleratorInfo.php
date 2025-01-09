<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InferenceDeviceInfo> $Accelerators
 * @property int $TotalInferenceMemoryInMiB
 */
class InferenceAcceleratorInfo extends Shape
{
    /**
     * @param array{
     *     Accelerators?: list<InferenceDeviceInfo>,
     *     TotalInferenceMemoryInMiB?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
