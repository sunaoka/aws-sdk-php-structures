<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StopBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $vCpu
 * @property int|null $memory
 * @property int|null $disk
 * @property 'GENERAL'|'NVME'|null $machineType
 */
class ComputeConfiguration extends Shape
{
    /**
     * @param array{
     *     vCpu?: int|null,
     *     memory?: int|null,
     *     disk?: int|null,
     *     machineType?: 'GENERAL'|'NVME'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
