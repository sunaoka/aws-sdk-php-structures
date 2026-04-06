<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WeeklyMaintenanceStartTime
 * @property string|null $ImportPath
 * @property string|null $ExportPath
 * @property int<1, 512000>|null $ImportedFileChunkSize
 * @property 'SCRATCH_1'|'SCRATCH_2'|'PERSISTENT_1'|'PERSISTENT_2'|null $DeploymentType
 * @property 'NONE'|'NEW'|'NEW_CHANGED'|'NEW_CHANGED_DELETED'|null $AutoImportPolicy
 * @property int<12, 1000>|null $PerUnitStorageThroughput
 * @property string|null $DailyAutomaticBackupStartTime
 * @property int<0, 90>|null $AutomaticBackupRetentionDays
 * @property bool|null $CopyTagsToBackups
 * @property 'NONE'|'READ'|null $DriveCacheType
 * @property 'NONE'|'LZ4'|null $DataCompressionType
 * @property bool|null $EfaEnabled
 * @property LustreLogCreateConfiguration|null $LogConfiguration
 * @property LustreRootSquashConfiguration|null $RootSquashConfiguration
 * @property CreateFileSystemLustreMetadataConfiguration|null $MetadataConfiguration
 * @property int<4000, 2000000>|null $ThroughputCapacity
 * @property LustreReadCacheConfiguration|null $DataReadCacheConfiguration
 */
class CreateFileSystemLustreConfiguration extends Shape
{
    /**
     * @param array{
     *     WeeklyMaintenanceStartTime?: string|null,
     *     ImportPath?: string|null,
     *     ExportPath?: string|null,
     *     ImportedFileChunkSize?: int<1, 512000>|null,
     *     DeploymentType?: 'SCRATCH_1'|'SCRATCH_2'|'PERSISTENT_1'|'PERSISTENT_2'|null,
     *     AutoImportPolicy?: 'NONE'|'NEW'|'NEW_CHANGED'|'NEW_CHANGED_DELETED'|null,
     *     PerUnitStorageThroughput?: int<12, 1000>|null,
     *     DailyAutomaticBackupStartTime?: string|null,
     *     AutomaticBackupRetentionDays?: int<0, 90>|null,
     *     CopyTagsToBackups?: bool|null,
     *     DriveCacheType?: 'NONE'|'READ'|null,
     *     DataCompressionType?: 'NONE'|'LZ4'|null,
     *     EfaEnabled?: bool|null,
     *     LogConfiguration?: LustreLogCreateConfiguration|null,
     *     RootSquashConfiguration?: LustreRootSquashConfiguration|null,
     *     MetadataConfiguration?: CreateFileSystemLustreMetadataConfiguration|null,
     *     ThroughputCapacity?: int<4000, 2000000>|null,
     *     DataReadCacheConfiguration?: LustreReadCacheConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
