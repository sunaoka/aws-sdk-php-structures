<?php

namespace Sunaoka\Aws\Structures\S3Tables\StartTableMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MaintenanceSettings|null $maintenanceSettings
 * @property MigrationPolicies|null $migrationPolicies
 */
class DataMigrationSettings extends Shape
{
    /**
     * @param array{
     *     maintenanceSettings?: MaintenanceSettings|null,
     *     migrationPolicies?: MigrationPolicies|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
