<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WeeklyMaintenanceStartTime
 * @property string|null $DailyAutomaticBackupStartTime
 * @property int<0, 90>|null $AutomaticBackupRetentionDays
 * @property 'NONE'|'NEW'|'NEW_CHANGED'|'NEW_CHANGED_DELETED'|null $AutoImportPolicy
 * @property 'NONE'|'LZ4'|null $DataCompressionType
 * @property LustreLogCreateConfiguration|null $LogConfiguration
 * @property LustreRootSquashConfiguration|null $RootSquashConfiguration
 * @property int<12, 1000>|null $PerUnitStorageThroughput
 * @property UpdateFileSystemLustreMetadataConfiguration|null $MetadataConfiguration
 * @property int<4000, 2000000>|null $ThroughputCapacity
 * @property LustreReadCacheConfiguration|null $DataReadCacheConfiguration
 */
class UpdateFileSystemLustreConfiguration extends Shape
{
    /**
     * @param array{
     *     WeeklyMaintenanceStartTime?: string|null,
     *     DailyAutomaticBackupStartTime?: string|null,
     *     AutomaticBackupRetentionDays?: int<0, 90>|null,
     *     AutoImportPolicy?: 'NONE'|'NEW'|'NEW_CHANGED'|'NEW_CHANGED_DELETED'|null,
     *     DataCompressionType?: 'NONE'|'LZ4'|null,
     *     LogConfiguration?: LustreLogCreateConfiguration|null,
     *     RootSquashConfiguration?: LustreRootSquashConfiguration|null,
     *     PerUnitStorageThroughput?: int<12, 1000>|null,
     *     MetadataConfiguration?: UpdateFileSystemLustreMetadataConfiguration|null,
     *     ThroughputCapacity?: int<4000, 2000000>|null,
     *     DataReadCacheConfiguration?: LustreReadCacheConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
