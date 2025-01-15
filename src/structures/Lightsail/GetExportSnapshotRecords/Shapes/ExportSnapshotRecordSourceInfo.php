<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetExportSnapshotRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InstanceSnapshot'|'DiskSnapshot'|null $resourceType
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $fromResourceName
 * @property string|null $fromResourceArn
 * @property InstanceSnapshotInfo|null $instanceSnapshotInfo
 * @property DiskSnapshotInfo|null $diskSnapshotInfo
 */
class ExportSnapshotRecordSourceInfo extends Shape
{
    /**
     * @param array{
     *     resourceType?: 'InstanceSnapshot'|'DiskSnapshot'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     name?: string|null,
     *     arn?: string|null,
     *     fromResourceName?: string|null,
     *     fromResourceArn?: string|null,
     *     instanceSnapshotInfo?: InstanceSnapshotInfo|null,
     *     diskSnapshotInfo?: DiskSnapshotInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
