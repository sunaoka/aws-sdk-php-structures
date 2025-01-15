<?php

namespace Sunaoka\Aws\Structures\Ec2\ListSnapshotsInRecycleBin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SnapshotId
 * @property \Aws\Api\DateTimeResult|null $RecycleBinEnterTime
 * @property \Aws\Api\DateTimeResult|null $RecycleBinExitTime
 * @property string|null $Description
 * @property string|null $VolumeId
 */
class SnapshotRecycleBinInfo extends Shape
{
    /**
     * @param array{
     *     SnapshotId?: string|null,
     *     RecycleBinEnterTime?: \Aws\Api\DateTimeResult|null,
     *     RecycleBinExitTime?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     VolumeId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
