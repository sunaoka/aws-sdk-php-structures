<?php

namespace Sunaoka\Aws\Structures\S3Tables\StartTableMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roleARN
 * @property Shapes\DestinationTable $destinationTable
 * @property 'glueTable' $sourceType
 * @property Shapes\SourceConfiguration $source
 * @property Shapes\DataMigrationSettings|null $dataMigration
 * @property bool|null $reviewMigrationPlan
 * @property Shapes\MigrationOutputConfiguration $migrationOutput
 */
class StartTableMigrationRequest extends Request
{
    /**
     * @param array{
     *     roleARN: string,
     *     destinationTable: Shapes\DestinationTable,
     *     sourceType: 'glueTable',
     *     source: Shapes\SourceConfiguration,
     *     dataMigration?: Shapes\DataMigrationSettings|null,
     *     reviewMigrationPlan?: bool|null,
     *     migrationOutput: Shapes\MigrationOutputConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
