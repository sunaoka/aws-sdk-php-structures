<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetExportSnapshotRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fromBundleId
 * @property string $fromBlueprintId
 * @property list<DiskInfo> $fromDiskInfo
 */
class InstanceSnapshotInfo extends Shape
{
    /**
     * @param array{
     *     fromBundleId?: string,
     *     fromBlueprintId?: string,
     *     fromDiskInfo?: list<DiskInfo>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
