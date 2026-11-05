<?php

namespace Sunaoka\Aws\Structures\S3Tables\StartTableMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MigrationCompactionSettings|null $icebergCompaction
 * @property MigrationSnapshotManagementSettings|null $icebergSnapshotManagement
 */
class MaintenanceSettings extends Shape
{
    /**
     * @param array{
     *     icebergCompaction?: MigrationCompactionSettings|null,
     *     icebergSnapshotManagement?: MigrationSnapshotManagementSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
