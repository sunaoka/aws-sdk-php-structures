<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateDataMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DataMigrationName
 * @property string|null $DataMigrationArn
 * @property \Aws\Api\DateTimeResult|null $DataMigrationCreateTime
 * @property \Aws\Api\DateTimeResult|null $DataMigrationStartTime
 * @property \Aws\Api\DateTimeResult|null $DataMigrationEndTime
 * @property string|null $ServiceAccessRoleArn
 * @property string|null $MigrationProjectArn
 * @property 'full-load'|'cdc'|'full-load-and-cdc'|null $DataMigrationType
 * @property DataMigrationSettings|null $DataMigrationSettings
 * @property list<SourceDataSetting>|null $SourceDataSettings
 * @property list<TargetDataSetting>|null $TargetDataSettings
 * @property DataMigrationStatistics|null $DataMigrationStatistics
 * @property string|null $DataMigrationStatus
 * @property list<string>|null $PublicIpAddresses
 * @property list<string>|null $DataMigrationCidrBlocks
 * @property string|null $LastFailureMessage
 * @property string|null $StopReason
 */
class DataMigration extends Shape
{
    /**
     * @param array{
     *     DataMigrationName?: string|null,
     *     DataMigrationArn?: string|null,
     *     DataMigrationCreateTime?: \Aws\Api\DateTimeResult|null,
     *     DataMigrationStartTime?: \Aws\Api\DateTimeResult|null,
     *     DataMigrationEndTime?: \Aws\Api\DateTimeResult|null,
     *     ServiceAccessRoleArn?: string|null,
     *     MigrationProjectArn?: string|null,
     *     DataMigrationType?: 'full-load'|'cdc'|'full-load-and-cdc'|null,
     *     DataMigrationSettings?: DataMigrationSettings|null,
     *     SourceDataSettings?: list<SourceDataSetting>|null,
     *     TargetDataSettings?: list<TargetDataSetting>|null,
     *     DataMigrationStatistics?: DataMigrationStatistics|null,
     *     DataMigrationStatus?: string|null,
     *     PublicIpAddresses?: list<string>|null,
     *     DataMigrationCidrBlocks?: list<string>|null,
     *     LastFailureMessage?: string|null,
     *     StopReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
