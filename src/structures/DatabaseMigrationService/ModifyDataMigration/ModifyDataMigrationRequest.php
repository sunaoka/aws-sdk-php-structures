<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyDataMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataMigrationIdentifier
 * @property string|null $DataMigrationName
 * @property bool|null $EnableCloudwatchLogs
 * @property string|null $ServiceAccessRoleArn
 * @property 'full-load'|'cdc'|'full-load-and-cdc'|null $DataMigrationType
 * @property list<Shapes\SourceDataSetting>|null $SourceDataSettings
 * @property int|null $NumberOfJobs
 * @property string|null $SelectionRules
 */
class ModifyDataMigrationRequest extends Request
{
    /**
     * @param array{
     *     DataMigrationIdentifier: string,
     *     DataMigrationName?: string|null,
     *     EnableCloudwatchLogs?: bool|null,
     *     ServiceAccessRoleArn?: string|null,
     *     DataMigrationType?: 'full-load'|'cdc'|'full-load-and-cdc'|null,
     *     SourceDataSettings?: list<Shapes\SourceDataSetting>|null,
     *     NumberOfJobs?: int|null,
     *     SelectionRules?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
