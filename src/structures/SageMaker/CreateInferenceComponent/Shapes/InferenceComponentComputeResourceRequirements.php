<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $NumberOfCpuCoresRequired
 * @property float $NumberOfAcceleratorDevicesRequired
 * @property int $MinMemoryRequiredInMb
 * @property int $MaxMemoryRequiredInMb
 */
class InferenceComponentComputeResourceRequirements extends Shape
{
    /**
     * @param array{
     *     NumberOfCpuCoresRequired?: float,
     *     NumberOfAcceleratorDevicesRequired?: float,
     *     MinMemoryRequiredInMb: int,
     *     MaxMemoryRequiredInMb?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
