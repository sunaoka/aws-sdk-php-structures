<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMaintenanceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $minSnapshotsToKeep
 * @property int $maxSnapshotAgeHours
 */
class IcebergSnapshotManagementSettings extends Shape
{
    /**
     * @param array{
     *     minSnapshotsToKeep?: int,
     *     maxSnapshotAgeHours?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
