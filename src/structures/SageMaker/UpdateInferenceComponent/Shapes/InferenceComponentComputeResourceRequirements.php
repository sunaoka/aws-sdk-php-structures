<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $NumberOfCpuCoresRequired
 * @property float $NumberOfAcceleratorDevicesRequired
 * @property int<128, max> $MinMemoryRequiredInMb
 * @property int<128, max> $MaxMemoryRequiredInMb
 */
class InferenceComponentComputeResourceRequirements extends Shape
{
    /**
     * @param array{
     *     NumberOfCpuCoresRequired?: float,
     *     NumberOfAcceleratorDevicesRequired?: float,
     *     MinMemoryRequiredInMb: int<128, max>,
     *     MaxMemoryRequiredInMb?: int<128, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
