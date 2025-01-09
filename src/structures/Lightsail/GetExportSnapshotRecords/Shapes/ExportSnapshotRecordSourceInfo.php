<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetExportSnapshotRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InstanceSnapshot'|'DiskSnapshot' $resourceType
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $name
 * @property string $arn
 * @property string $fromResourceName
 * @property string $fromResourceArn
 * @property InstanceSnapshotInfo $instanceSnapshotInfo
 * @property DiskSnapshotInfo $diskSnapshotInfo
 */
class ExportSnapshotRecordSourceInfo extends Shape
{
    /**
     * @param array{
     *     resourceType?: 'InstanceSnapshot'|'DiskSnapshot',
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     name?: string,
     *     arn?: string,
     *     fromResourceName?: string,
     *     fromResourceArn?: string,
     *     instanceSnapshotInfo?: InstanceSnapshotInfo,
     *     diskSnapshotInfo?: DiskSnapshotInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
