<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartDataMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataMigrationName
 * @property string $DataMigrationArn
 * @property \Aws\Api\DateTimeResult $DataMigrationCreateTime
 * @property \Aws\Api\DateTimeResult $DataMigrationStartTime
 * @property \Aws\Api\DateTimeResult $DataMigrationEndTime
 * @property string $ServiceAccessRoleArn
 * @property string $MigrationProjectArn
 * @property 'full-load'|'cdc'|'full-load-and-cdc' $DataMigrationType
 * @property DataMigrationSettings $DataMigrationSettings
 * @property list<SourceDataSetting> $SourceDataSettings
 * @property DataMigrationStatistics $DataMigrationStatistics
 * @property string $DataMigrationStatus
 * @property list<string> $PublicIpAddresses
 * @property list<string> $DataMigrationCidrBlocks
 * @property string $LastFailureMessage
 * @property string $StopReason
 */
class DataMigration extends Shape
{
    /**
     * @param array{
     *     DataMigrationName?: string,
     *     DataMigrationArn?: string,
     *     DataMigrationCreateTime?: \Aws\Api\DateTimeResult,
     *     DataMigrationStartTime?: \Aws\Api\DateTimeResult,
     *     DataMigrationEndTime?: \Aws\Api\DateTimeResult,
     *     ServiceAccessRoleArn?: string,
     *     MigrationProjectArn?: string,
     *     DataMigrationType?: 'full-load'|'cdc'|'full-load-and-cdc',
     *     DataMigrationSettings?: DataMigrationSettings,
     *     SourceDataSettings?: list<SourceDataSetting>,
     *     DataMigrationStatistics?: DataMigrationStatistics,
     *     DataMigrationStatus?: string,
     *     PublicIpAddresses?: list<string>,
     *     DataMigrationCidrBlocks?: list<string>,
     *     LastFailureMessage?: string,
     *     StopReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
