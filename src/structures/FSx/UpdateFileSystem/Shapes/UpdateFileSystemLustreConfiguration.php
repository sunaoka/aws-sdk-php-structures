<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WeeklyMaintenanceStartTime
 * @property string $DailyAutomaticBackupStartTime
 * @property int<0, 90> $AutomaticBackupRetentionDays
 * @property 'NONE'|'NEW'|'NEW_CHANGED'|'NEW_CHANGED_DELETED' $AutoImportPolicy
 * @property 'NONE'|'LZ4' $DataCompressionType
 * @property LustreLogCreateConfiguration $LogConfiguration
 * @property LustreRootSquashConfiguration $RootSquashConfiguration
 * @property int<12, 1000> $PerUnitStorageThroughput
 * @property UpdateFileSystemLustreMetadataConfiguration $MetadataConfiguration
 */
class UpdateFileSystemLustreConfiguration extends Shape
{
    /**
     * @param array{
     *     WeeklyMaintenanceStartTime?: string,
     *     DailyAutomaticBackupStartTime?: string,
     *     AutomaticBackupRetentionDays?: int<0, 90>,
     *     AutoImportPolicy?: 'NONE'|'NEW'|'NEW_CHANGED'|'NEW_CHANGED_DELETED',
     *     DataCompressionType?: 'NONE'|'LZ4',
     *     LogConfiguration?: LustreLogCreateConfiguration,
     *     RootSquashConfiguration?: LustreRootSquashConfiguration,
     *     PerUnitStorageThroughput?: int<12, 1000>,
     *     MetadataConfiguration?: UpdateFileSystemLustreMetadataConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
