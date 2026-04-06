<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMaintenanceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergCompactionSettings|null $icebergCompaction
 * @property IcebergSnapshotManagementSettings|null $icebergSnapshotManagement
 */
class TableMaintenanceSettings extends Shape
{
    /**
     * @param array{
     *     icebergCompaction?: IcebergCompactionSettings|null,
     *     icebergSnapshotManagement?: IcebergSnapshotManagementSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
