<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMaintenanceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2147483647> $minSnapshotsToKeep
 * @property int<1, 2147483647> $maxSnapshotAgeHours
 */
class IcebergSnapshotManagementSettings extends Shape
{
    /**
     * @param array{
     *     minSnapshotsToKeep?: int<1, 2147483647>,
     *     maxSnapshotAgeHours?: int<1, 2147483647>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
