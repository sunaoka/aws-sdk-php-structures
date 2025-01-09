<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WeeklyMaintenanceStartTime
 * @property string $ImportPath
 * @property string $ExportPath
 * @property int<1, 512000> $ImportedFileChunkSize
 * @property 'SCRATCH_1'|'SCRATCH_2'|'PERSISTENT_1'|'PERSISTENT_2' $DeploymentType
 * @property 'NONE'|'NEW'|'NEW_CHANGED'|'NEW_CHANGED_DELETED' $AutoImportPolicy
 * @property int<12, 1000> $PerUnitStorageThroughput
 * @property string $DailyAutomaticBackupStartTime
 * @property int<0, 90> $AutomaticBackupRetentionDays
 * @property bool $CopyTagsToBackups
 * @property 'NONE'|'READ' $DriveCacheType
 * @property 'NONE'|'LZ4' $DataCompressionType
 * @property bool $EfaEnabled
 * @property LustreLogCreateConfiguration $LogConfiguration
 * @property LustreRootSquashConfiguration $RootSquashConfiguration
 * @property CreateFileSystemLustreMetadataConfiguration $MetadataConfiguration
 */
class CreateFileSystemLustreConfiguration extends Shape
{
    /**
     * @param array{
     *     WeeklyMaintenanceStartTime?: string,
     *     ImportPath?: string,
     *     ExportPath?: string,
     *     ImportedFileChunkSize?: int<1, 512000>,
     *     DeploymentType?: 'SCRATCH_1'|'SCRATCH_2'|'PERSISTENT_1'|'PERSISTENT_2',
     *     AutoImportPolicy?: 'NONE'|'NEW'|'NEW_CHANGED'|'NEW_CHANGED_DELETED',
     *     PerUnitStorageThroughput?: int<12, 1000>,
     *     DailyAutomaticBackupStartTime?: string,
     *     AutomaticBackupRetentionDays?: int<0, 90>,
     *     CopyTagsToBackups?: bool,
     *     DriveCacheType?: 'NONE'|'READ',
     *     DataCompressionType?: 'NONE'|'LZ4',
     *     EfaEnabled?: bool,
     *     LogConfiguration?: LustreLogCreateConfiguration,
     *     RootSquashConfiguration?: LustreRootSquashConfiguration,
     *     MetadataConfiguration?: CreateFileSystemLustreMetadataConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
