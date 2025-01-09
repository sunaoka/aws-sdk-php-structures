<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $vCpu
 * @property int $memory
 * @property int $disk
 * @property 'GENERAL'|'NVME' $machineType
 */
class ComputeConfiguration extends Shape
{
    /**
     * @param array{
     *     vCpu?: int,
     *     memory?: int,
     *     disk?: int,
     *     machineType?: 'GENERAL'|'NVME'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
