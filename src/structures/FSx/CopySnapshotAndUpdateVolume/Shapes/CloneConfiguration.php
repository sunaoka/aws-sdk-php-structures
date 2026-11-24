<?php

namespace Sunaoka\Aws\Structures\FSx\CopySnapshotAndUpdateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParentVolumeId
 * @property string|null $SnapshotId
 */
class CloneConfiguration extends Shape
{
    /**
     * @param array{
     *     ParentVolumeId?: string|null,
     *     SnapshotId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
