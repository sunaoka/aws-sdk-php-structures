<?php

namespace Sunaoka\Aws\Structures\S3Tables\SyncTableMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $tableCompatibilityReport
 * @property string|null $objectCompatibilityReport
 * @property string|null $objectMigrationReport
 */
class MigrationReportPrefixes extends Shape
{
    /**
     * @param array{
     *     tableCompatibilityReport?: string|null,
     *     objectCompatibilityReport?: string|null,
     *     objectMigrationReport?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
