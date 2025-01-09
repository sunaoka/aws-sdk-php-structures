<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 90> $AutomaticBackupRetentionDays
 * @property string $DailyAutomaticBackupStartTime
 * @property string $FsxAdminPassword
 * @property string $WeeklyMaintenanceStartTime
 * @property DiskIopsConfiguration $DiskIopsConfiguration
 * @property int<8, 100000> $ThroughputCapacity
 * @property list<string> $AddRouteTableIds
 * @property list<string> $RemoveRouteTableIds
 * @property int<128, 6144> $ThroughputCapacityPerHAPair
 * @property int<1, 12> $HAPairs
 */
class UpdateFileSystemOntapConfiguration extends Shape
{
    /**
     * @param array{
     *     AutomaticBackupRetentionDays?: int<0, 90>,
     *     DailyAutomaticBackupStartTime?: string,
     *     FsxAdminPassword?: string,
     *     WeeklyMaintenanceStartTime?: string,
     *     DiskIopsConfiguration?: DiskIopsConfiguration,
     *     ThroughputCapacity?: int<8, 100000>,
     *     AddRouteTableIds?: list<string>,
     *     RemoveRouteTableIds?: list<string>,
     *     ThroughputCapacityPerHAPair?: int<128, 6144>,
     *     HAPairs?: int<1, 12>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
