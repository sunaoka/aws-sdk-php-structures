<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMaintenanceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergCompactionSettings $icebergCompaction
 * @property IcebergSnapshotManagementSettings $icebergSnapshotManagement
 */
class TableMaintenanceSettings extends Shape
{
    /**
     * @param array{
     *     icebergCompaction?: IcebergCompactionSettings,
     *     icebergSnapshotManagement?: IcebergSnapshotManagementSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
