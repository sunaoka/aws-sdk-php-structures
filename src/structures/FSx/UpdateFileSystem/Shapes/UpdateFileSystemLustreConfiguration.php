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
     *     RootSquashConfiguration?: LustreRootSquashConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
