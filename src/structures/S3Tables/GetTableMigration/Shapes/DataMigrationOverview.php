<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MaintenanceSettings $maintenanceSettings
 * @property MigrationPolicies $migrationPolicies
 */
class DataMigrationOverview extends Shape
{
    /**
     * @param array{
     *     maintenanceSettings: MaintenanceSettings,
     *     migrationPolicies: MigrationPolicies
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
