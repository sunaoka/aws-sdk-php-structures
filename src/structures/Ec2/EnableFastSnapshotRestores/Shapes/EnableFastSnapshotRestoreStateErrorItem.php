<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableFastSnapshotRestores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property EnableFastSnapshotRestoreStateError $Error
 */
class EnableFastSnapshotRestoreStateErrorItem extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     Error?: EnableFastSnapshotRestoreStateError
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
