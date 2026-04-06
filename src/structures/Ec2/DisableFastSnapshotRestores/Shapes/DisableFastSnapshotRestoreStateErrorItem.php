<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableFastSnapshotRestores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property DisableFastSnapshotRestoreStateError|null $Error
 */
class DisableFastSnapshotRestoreStateErrorItem extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     Error?: DisableFastSnapshotRestoreStateError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
