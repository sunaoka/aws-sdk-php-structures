<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableFastSnapshotRestores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property DisableFastSnapshotRestoreStateError $Error
 */
class DisableFastSnapshotRestoreStateErrorItem extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     Error?: DisableFastSnapshotRestoreStateError
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
