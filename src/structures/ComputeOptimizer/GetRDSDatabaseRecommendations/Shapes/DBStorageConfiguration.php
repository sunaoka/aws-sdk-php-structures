<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $storageType
 * @property int|null $allocatedStorage
 * @property int|null $iops
 * @property int|null $maxAllocatedStorage
 * @property int|null $storageThroughput
 */
class DBStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     storageType?: string|null,
     *     allocatedStorage?: int|null,
     *     iops?: int|null,
     *     maxAllocatedStorage?: int|null,
     *     storageThroughput?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
