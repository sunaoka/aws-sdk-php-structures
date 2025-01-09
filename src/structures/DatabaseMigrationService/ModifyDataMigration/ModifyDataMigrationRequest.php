<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyDataMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataMigrationIdentifier
 * @property string $DataMigrationName
 * @property bool $EnableCloudwatchLogs
 * @property string $ServiceAccessRoleArn
 * @property 'full-load'|'cdc'|'full-load-and-cdc' $DataMigrationType
 * @property list<Shapes\SourceDataSetting> $SourceDataSettings
 * @property int $NumberOfJobs
 * @property string $SelectionRules
 */
class ModifyDataMigrationRequest extends Request
{
    /**
     * @param array{
     *     DataMigrationIdentifier: string,
     *     DataMigrationName?: string,
     *     EnableCloudwatchLogs?: bool,
     *     ServiceAccessRoleArn?: string,
     *     DataMigrationType?: 'full-load'|'cdc'|'full-load-and-cdc',
     *     SourceDataSettings?: list<Shapes\SourceDataSetting>,
     *     NumberOfJobs?: int,
     *     SelectionRules?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
