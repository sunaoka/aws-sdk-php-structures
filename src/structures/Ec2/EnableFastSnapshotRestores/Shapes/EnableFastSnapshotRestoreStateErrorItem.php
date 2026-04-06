<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableFastSnapshotRestores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property EnableFastSnapshotRestoreStateError|null $Error
 */
class EnableFastSnapshotRestoreStateErrorItem extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     Error?: EnableFastSnapshotRestoreStateError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
