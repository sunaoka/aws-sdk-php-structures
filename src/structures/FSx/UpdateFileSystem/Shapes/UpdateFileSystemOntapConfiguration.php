<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 90>|null $AutomaticBackupRetentionDays
 * @property string|null $DailyAutomaticBackupStartTime
 * @property string|null $FsxAdminPassword
 * @property string|null $WeeklyMaintenanceStartTime
 * @property DiskIopsConfiguration|null $DiskIopsConfiguration
 * @property int<8, 100000>|null $ThroughputCapacity
 * @property list<string>|null $AddRouteTableIds
 * @property list<string>|null $RemoveRouteTableIds
 * @property int<128, 6144>|null $ThroughputCapacityPerHAPair
 * @property int<1, 12>|null $HAPairs
 */
class UpdateFileSystemOntapConfiguration extends Shape
{
    /**
     * @param array{
     *     AutomaticBackupRetentionDays?: int<0, 90>|null,
     *     DailyAutomaticBackupStartTime?: string|null,
     *     FsxAdminPassword?: string|null,
     *     WeeklyMaintenanceStartTime?: string|null,
     *     DiskIopsConfiguration?: DiskIopsConfiguration|null,
     *     ThroughputCapacity?: int<8, 100000>|null,
     *     AddRouteTableIds?: list<string>|null,
     *     RemoveRouteTableIds?: list<string>|null,
     *     ThroughputCapacityPerHAPair?: int<128, 6144>|null,
     *     HAPairs?: int<1, 12>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
