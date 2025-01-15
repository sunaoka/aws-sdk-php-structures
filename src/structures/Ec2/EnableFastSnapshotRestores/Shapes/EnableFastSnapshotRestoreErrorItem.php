<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableFastSnapshotRestores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SnapshotId
 * @property list<EnableFastSnapshotRestoreStateErrorItem>|null $FastSnapshotRestoreStateErrors
 */
class EnableFastSnapshotRestoreErrorItem extends Shape
{
    /**
     * @param array{
     *     SnapshotId?: string|null,
     *     FastSnapshotRestoreStateErrors?: list<EnableFastSnapshotRestoreStateErrorItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
