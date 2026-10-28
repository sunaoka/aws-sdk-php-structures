<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterContainerInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $gpuId
 * @property 'IDLE'|'NVIDIA_MPS'|'DEDICATED'|null $sharingMode
 * @property int|null $totalMemoryInMiB
 * @property int|null $remainingMemoryInMiB
 * @property int|null $containerCount
 */
class GpuDevice extends Shape
{
    /**
     * @param array{
     *     gpuId?: string|null,
     *     sharingMode?: 'IDLE'|'NVIDIA_MPS'|'DEDICATED'|null,
     *     totalMemoryInMiB?: int|null,
     *     remainingMemoryInMiB?: int|null,
     *     containerCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
