<?php

namespace Sunaoka\Aws\Structures\FSx\ReleaseFileSystemNfsV3Locks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WeeklyMaintenanceStartTime
 * @property DataRepositoryConfiguration $DataRepositoryConfiguration
 * @property 'SCRATCH_1'|'SCRATCH_2'|'PERSISTENT_1'|'PERSISTENT_2' $DeploymentType
 * @property int<12, 1000> $PerUnitStorageThroughput
 * @property string $MountName
 * @property string $DailyAutomaticBackupStartTime
 * @property int<0, 90> $AutomaticBackupRetentionDays
 * @property bool $CopyTagsToBackups
 * @property 'NONE'|'READ' $DriveCacheType
 * @property 'NONE'|'LZ4' $DataCompressionType
 * @property LustreLogConfiguration $LogConfiguration
 * @property LustreRootSquashConfiguration $RootSquashConfiguration
 * @property FileSystemLustreMetadataConfiguration $MetadataConfiguration
 * @property bool $EfaEnabled
 */
class LustreFileSystemConfiguration extends Shape
{
    /**
     * @param array{
     *     WeeklyMaintenanceStartTime?: string,
     *     DataRepositoryConfiguration?: DataRepositoryConfiguration,
     *     DeploymentType?: 'SCRATCH_1'|'SCRATCH_2'|'PERSISTENT_1'|'PERSISTENT_2',
     *     PerUnitStorageThroughput?: int<12, 1000>,
     *     MountName?: string,
     *     DailyAutomaticBackupStartTime?: string,
     *     AutomaticBackupRetentionDays?: int<0, 90>,
     *     CopyTagsToBackups?: bool,
     *     DriveCacheType?: 'NONE'|'READ',
     *     DataCompressionType?: 'NONE'|'LZ4',
     *     LogConfiguration?: LustreLogConfiguration,
     *     RootSquashConfiguration?: LustreRootSquashConfiguration,
     *     MetadataConfiguration?: FileSystemLustreMetadataConfiguration,
     *     EfaEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
