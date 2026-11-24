<?php

namespace Sunaoka\Aws\Structures\FSx\CreateSnapmirrorRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SnapshotId
 * @property string|null $SnapshotName
 */
class SnapmirrorExportedSnapshot extends Shape
{
    /**
     * @param array{
     *     SnapshotId?: string|null,
     *     SnapshotName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
