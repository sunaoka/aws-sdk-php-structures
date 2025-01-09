<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableFastSnapshotRestores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotId
 * @property list<EnableFastSnapshotRestoreStateErrorItem> $FastSnapshotRestoreStateErrors
 */
class EnableFastSnapshotRestoreErrorItem extends Shape
{
    /**
     * @param array{
     *     SnapshotId?: string,
     *     FastSnapshotRestoreStateErrors?: list<EnableFastSnapshotRestoreStateErrorItem>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
