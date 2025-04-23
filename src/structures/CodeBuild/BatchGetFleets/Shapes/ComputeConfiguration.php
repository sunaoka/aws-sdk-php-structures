<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $vCpu
 * @property int|null $memory
 * @property int|null $disk
 * @property 'GENERAL'|'NVME'|null $machineType
 * @property string|null $instanceType
 */
class ComputeConfiguration extends Shape
{
    /**
     * @param array{
     *     vCpu?: int|null,
     *     memory?: int|null,
     *     disk?: int|null,
     *     machineType?: 'GENERAL'|'NVME'|null,
     *     instanceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
