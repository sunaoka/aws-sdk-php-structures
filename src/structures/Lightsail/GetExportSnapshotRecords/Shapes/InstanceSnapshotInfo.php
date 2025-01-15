<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetExportSnapshotRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fromBundleId
 * @property string|null $fromBlueprintId
 * @property list<DiskInfo>|null $fromDiskInfo
 */
class InstanceSnapshotInfo extends Shape
{
    /**
     * @param array{
     *     fromBundleId?: string|null,
     *     fromBlueprintId?: string|null,
     *     fromDiskInfo?: list<DiskInfo>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
