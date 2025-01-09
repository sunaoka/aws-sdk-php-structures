<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 90> $AutomaticBackupRetentionDays
 * @property bool $CopyTagsToBackups
 * @property bool $CopyTagsToVolumes
 * @property string $DailyAutomaticBackupStartTime
 * @property int<8, 100000> $ThroughputCapacity
 * @property string $WeeklyMaintenanceStartTime
 * @property DiskIopsConfiguration $DiskIopsConfiguration
 * @property list<string> $AddRouteTableIds
 * @property list<string> $RemoveRouteTableIds
 * @property OpenZFSReadCacheConfiguration $ReadCacheConfiguration
 */
class UpdateFileSystemOpenZFSConfiguration extends Shape
{
    /**
     * @param array{
     *     AutomaticBackupRetentionDays?: int<0, 90>,
     *     CopyTagsToBackups?: bool,
     *     CopyTagsToVolumes?: bool,
     *     DailyAutomaticBackupStartTime?: string,
     *     ThroughputCapacity?: int<8, 100000>,
     *     WeeklyMaintenanceStartTime?: string,
     *     DiskIopsConfiguration?: DiskIopsConfiguration,
     *     AddRouteTableIds?: list<string>,
     *     RemoveRouteTableIds?: list<string>,
     *     ReadCacheConfiguration?: OpenZFSReadCacheConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
