<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $objectsMigrated
 * @property int|null $objectsFailedMigration
 * @property int|null $objectsPendingMigration
 */
class MigrationStats extends Shape
{
    /**
     * @param array{
     *     objectsMigrated?: int|null,
     *     objectsFailedMigration?: int|null,
     *     objectsPendingMigration?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
