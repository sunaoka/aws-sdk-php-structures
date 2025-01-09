<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WeeklyMaintenanceStartTime
 * @property DataRepositoryConfiguration $DataRepositoryConfiguration
 * @property 'SCRATCH_1'|'SCRATCH_2'|'PERSISTENT_1'|'PERSISTENT_2' $DeploymentType
 * @property int $PerUnitStorageThroughput
 * @property string $MountName
 * @property string $DailyAutomaticBackupStartTime
 * @property int $AutomaticBackupRetentionDays
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
     *     PerUnitStorageThroughput?: int,
     *     MountName?: string,
     *     DailyAutomaticBackupStartTime?: string,
     *     AutomaticBackupRetentionDays?: int,
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
