<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AutomaticBackupRetentionDays
 * @property string $DailyAutomaticBackupStartTime
 * @property string $FsxAdminPassword
 * @property string $WeeklyMaintenanceStartTime
 * @property DiskIopsConfiguration $DiskIopsConfiguration
 * @property int $ThroughputCapacity
 * @property list<string> $AddRouteTableIds
 * @property list<string> $RemoveRouteTableIds
 * @property int $ThroughputCapacityPerHAPair
 * @property int $HAPairs
 */
class UpdateFileSystemOntapConfiguration extends Shape
{
    /**
     * @param array{
     *     AutomaticBackupRetentionDays?: int,
     *     DailyAutomaticBackupStartTime?: string,
     *     FsxAdminPassword?: string,
     *     WeeklyMaintenanceStartTime?: string,
     *     DiskIopsConfiguration?: DiskIopsConfiguration,
     *     ThroughputCapacity?: int,
     *     AddRouteTableIds?: list<string>,
     *     RemoveRouteTableIds?: list<string>,
     *     ThroughputCapacityPerHAPair?: int,
     *     HAPairs?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
