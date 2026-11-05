<?php

namespace Sunaoka\Aws\Structures\S3Tables\SyncTableMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roleARN
 * @property string $tableARN
 * @property bool|null $reviewMigrationPlan
 * @property Shapes\MigrationOutputConfiguration $migrationOutput
 */
class SyncTableMigrationRequest extends Request
{
    /**
     * @param array{
     *     roleARN: string,
     *     tableARN: string,
     *     reviewMigrationPlan?: bool|null,
     *     migrationOutput: Shapes\MigrationOutputConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
