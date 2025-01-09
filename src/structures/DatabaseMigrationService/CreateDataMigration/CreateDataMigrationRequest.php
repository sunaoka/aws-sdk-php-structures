<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateDataMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataMigrationName
 * @property string $MigrationProjectIdentifier
 * @property 'full-load'|'cdc'|'full-load-and-cdc' $DataMigrationType
 * @property string $ServiceAccessRoleArn
 * @property bool $EnableCloudwatchLogs
 * @property list<Shapes\SourceDataSetting> $SourceDataSettings
 * @property int $NumberOfJobs
 * @property list<Shapes\Tag> $Tags
 * @property string $SelectionRules
 */
class CreateDataMigrationRequest extends Request
{
    /**
     * @param array{
     *     DataMigrationName?: string,
     *     MigrationProjectIdentifier: string,
     *     DataMigrationType: 'full-load'|'cdc'|'full-load-and-cdc',
     *     ServiceAccessRoleArn: string,
     *     EnableCloudwatchLogs?: bool,
     *     SourceDataSettings?: list<Shapes\SourceDataSetting>,
     *     NumberOfJobs?: int,
     *     Tags?: list<Shapes\Tag>,
     *     SelectionRules?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
