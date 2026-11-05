<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<3, max>|null $minSnapshotsToKeep
 * @property int<1, 2147483647>|null $maxSnapshotAgeHours
 */
class MigrationSnapshotManagementSettings extends Shape
{
    /**
     * @param array{
     *     minSnapshotsToKeep?: int<3, max>|null,
     *     maxSnapshotAgeHours?: int<1, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
