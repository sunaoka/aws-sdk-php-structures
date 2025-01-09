<?php

namespace Sunaoka\Aws\Structures\DirectoryService\GetSnapshotLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $ManualSnapshotsLimit
 * @property int<0, max> $ManualSnapshotsCurrentCount
 * @property bool $ManualSnapshotsLimitReached
 */
class SnapshotLimits extends Shape
{
    /**
     * @param array{
     *     ManualSnapshotsLimit?: int<0, max>,
     *     ManualSnapshotsCurrentCount?: int<0, max>,
     *     ManualSnapshotsLimitReached?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
