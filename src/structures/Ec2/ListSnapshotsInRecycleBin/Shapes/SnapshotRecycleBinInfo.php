<?php

namespace Sunaoka\Aws\Structures\Ec2\ListSnapshotsInRecycleBin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotId
 * @property \Aws\Api\DateTimeResult $RecycleBinEnterTime
 * @property \Aws\Api\DateTimeResult $RecycleBinExitTime
 * @property string $Description
 * @property string $VolumeId
 */
class SnapshotRecycleBinInfo extends Shape
{
    /**
     * @param array{
     *     SnapshotId?: string,
     *     RecycleBinEnterTime?: \Aws\Api\DateTimeResult,
     *     RecycleBinExitTime?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     VolumeId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
