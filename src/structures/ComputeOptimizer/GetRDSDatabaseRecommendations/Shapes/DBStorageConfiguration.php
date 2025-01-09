<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $storageType
 * @property int $allocatedStorage
 * @property int $iops
 * @property int $maxAllocatedStorage
 * @property int $storageThroughput
 */
class DBStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     storageType?: string,
     *     allocatedStorage?: int,
     *     iops?: int,
     *     maxAllocatedStorage?: int,
     *     storageThroughput?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
