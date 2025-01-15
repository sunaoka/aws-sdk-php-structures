<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableFastSnapshotRestores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SnapshotId
 * @property list<DisableFastSnapshotRestoreStateErrorItem>|null $FastSnapshotRestoreStateErrors
 */
class DisableFastSnapshotRestoreErrorItem extends Shape
{
    /**
     * @param array{
     *     SnapshotId?: string|null,
     *     FastSnapshotRestoreStateErrors?: list<DisableFastSnapshotRestoreStateErrorItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
