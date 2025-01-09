<?php

namespace Sunaoka\Aws\Structures\DirectoryService\GetSnapshotLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ManualSnapshotsLimit
 * @property int $ManualSnapshotsCurrentCount
 * @property bool $ManualSnapshotsLimitReached
 */
class SnapshotLimits extends Shape
{
    /**
     * @param array{
     *     ManualSnapshotsLimit?: int,
     *     ManualSnapshotsCurrentCount?: int,
     *     ManualSnapshotsLimitReached?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
