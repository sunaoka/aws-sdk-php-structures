<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableFastSnapshotRestores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotId
 * @property list<DisableFastSnapshotRestoreStateErrorItem> $FastSnapshotRestoreStateErrors
 */
class DisableFastSnapshotRestoreErrorItem extends Shape
{
    /**
     * @param array{
     *     SnapshotId?: string,
     *     FastSnapshotRestoreStateErrors?: list<DisableFastSnapshotRestoreStateErrorItem>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
