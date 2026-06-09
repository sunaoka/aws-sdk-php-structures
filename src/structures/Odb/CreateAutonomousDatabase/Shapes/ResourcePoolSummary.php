<?php

namespace Sunaoka\Aws\Structures\Odb\CreateAutonomousDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isDisabled
 * @property int|null $poolSize
 * @property int|null $poolStorageSizeInTBs
 * @property double|null $availableStorageCapacityInTBs
 * @property int|null $totalComputeCapacity
 * @property int|null $availableComputeCapacity
 */
class ResourcePoolSummary extends Shape
{
    /**
     * @param array{
     *     isDisabled?: bool|null,
     *     poolSize?: int|null,
     *     poolStorageSizeInTBs?: int|null,
     *     availableStorageCapacityInTBs?: double|null,
     *     totalComputeCapacity?: int|null,
     *     availableComputeCapacity?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
