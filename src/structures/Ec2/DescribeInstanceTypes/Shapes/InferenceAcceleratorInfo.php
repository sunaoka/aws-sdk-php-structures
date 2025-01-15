<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InferenceDeviceInfo>|null $Accelerators
 * @property int|null $TotalInferenceMemoryInMiB
 */
class InferenceAcceleratorInfo extends Shape
{
    /**
     * @param array{
     *     Accelerators?: list<InferenceDeviceInfo>|null,
     *     TotalInferenceMemoryInMiB?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
