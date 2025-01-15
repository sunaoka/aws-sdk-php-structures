<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $NumberOfCpuCoresRequired
 * @property float|null $NumberOfAcceleratorDevicesRequired
 * @property int<128, max> $MinMemoryRequiredInMb
 * @property int<128, max>|null $MaxMemoryRequiredInMb
 */
class InferenceComponentComputeResourceRequirements extends Shape
{
    /**
     * @param array{
     *     NumberOfCpuCoresRequired?: float|null,
     *     NumberOfAcceleratorDevicesRequired?: float|null,
     *     MinMemoryRequiredInMb: int<128, max>,
     *     MaxMemoryRequiredInMb?: int<128, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
