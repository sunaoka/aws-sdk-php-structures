<?php

namespace Sunaoka\Aws\Structures\DirectoryService\GetSnapshotLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $ManualSnapshotsLimit
 * @property int<0, max>|null $ManualSnapshotsCurrentCount
 * @property bool|null $ManualSnapshotsLimitReached
 */
class SnapshotLimits extends Shape
{
    /**
     * @param array{
     *     ManualSnapshotsLimit?: int<0, max>|null,
     *     ManualSnapshotsCurrentCount?: int<0, max>|null,
     *     ManualSnapshotsLimitReached?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
