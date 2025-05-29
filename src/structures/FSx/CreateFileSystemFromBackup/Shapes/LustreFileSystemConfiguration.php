<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystemFromBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WeeklyMaintenanceStartTime
 * @property DataRepositoryConfiguration|null $DataRepositoryConfiguration
 * @property 'SCRATCH_1'|'SCRATCH_2'|'PERSISTENT_1'|'PERSISTENT_2'|null $DeploymentType
 * @property int<12, 1000>|null $PerUnitStorageThroughput
 * @property string|null $MountName
 * @property string|null $DailyAutomaticBackupStartTime
 * @property int<0, 90>|null $AutomaticBackupRetentionDays
 * @property bool|null $CopyTagsToBackups
 * @property 'NONE'|'READ'|null $DriveCacheType
 * @property 'NONE'|'LZ4'|null $DataCompressionType
 * @property LustreLogConfiguration|null $LogConfiguration
 * @property LustreRootSquashConfiguration|null $RootSquashConfiguration
 * @property FileSystemLustreMetadataConfiguration|null $MetadataConfiguration
 * @property bool|null $EfaEnabled
 * @property int<4000, 2000000>|null $ThroughputCapacity
 * @property LustreReadCacheConfiguration|null $DataReadCacheConfiguration
 */
class LustreFileSystemConfiguration extends Shape
{
    /**
     * @param array{
     *     WeeklyMaintenanceStartTime?: string|null,
     *     DataRepositoryConfiguration?: DataRepositoryConfiguration|null,
     *     DeploymentType?: 'SCRATCH_1'|'SCRATCH_2'|'PERSISTENT_1'|'PERSISTENT_2'|null,
     *     PerUnitStorageThroughput?: int<12, 1000>|null,
     *     MountName?: string|null,
     *     DailyAutomaticBackupStartTime?: string|null,
     *     AutomaticBackupRetentionDays?: int<0, 90>|null,
     *     CopyTagsToBackups?: bool|null,
     *     DriveCacheType?: 'NONE'|'READ'|null,
     *     DataCompressionType?: 'NONE'|'LZ4'|null,
     *     LogConfiguration?: LustreLogConfiguration|null,
     *     RootSquashConfiguration?: LustreRootSquashConfiguration|null,
     *     MetadataConfiguration?: FileSystemLustreMetadataConfiguration|null,
     *     EfaEnabled?: bool|null,
     *     ThroughputCapacity?: int<4000, 2000000>|null,
     *     DataReadCacheConfiguration?: LustreReadCacheConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
