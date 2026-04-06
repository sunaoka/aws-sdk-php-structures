<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateDataMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DataMigrationName
 * @property string $MigrationProjectIdentifier
 * @property 'full-load'|'cdc'|'full-load-and-cdc' $DataMigrationType
 * @property string $ServiceAccessRoleArn
 * @property bool|null $EnableCloudwatchLogs
 * @property list<Shapes\SourceDataSetting>|null $SourceDataSettings
 * @property int|null $NumberOfJobs
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $SelectionRules
 */
class CreateDataMigrationRequest extends Request
{
    /**
     * @param array{
     *     DataMigrationName?: string|null,
     *     MigrationProjectIdentifier: string,
     *     DataMigrationType: 'full-load'|'cdc'|'full-load-and-cdc',
     *     ServiceAccessRoleArn: string,
     *     EnableCloudwatchLogs?: bool|null,
     *     SourceDataSettings?: list<Shapes\SourceDataSetting>|null,
     *     NumberOfJobs?: int|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     SelectionRules?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
