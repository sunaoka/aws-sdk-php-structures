<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65536>|null $sizeGiB
 * @property int<100, 80000>|null $iops
 * @property int<125, 2000>|null $throughputMiB
 * @property string $mountPath
 * @property int<1, 8760>|null $lastUsedTtlHours
 */
class PersistentVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     sizeGiB?: int<1, 65536>|null,
     *     iops?: int<100, 80000>|null,
     *     throughputMiB?: int<125, 2000>|null,
     *     mountPath: string,
     *     lastUsedTtlHours?: int<1, 8760>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
