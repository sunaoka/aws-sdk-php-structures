<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 90>|null $AutomaticBackupRetentionDays
 * @property bool|null $CopyTagsToBackups
 * @property bool|null $CopyTagsToVolumes
 * @property string|null $DailyAutomaticBackupStartTime
 * @property int<8, 100000>|null $ThroughputCapacity
 * @property string|null $WeeklyMaintenanceStartTime
 * @property DiskIopsConfiguration|null $DiskIopsConfiguration
 * @property list<string>|null $AddRouteTableIds
 * @property list<string>|null $RemoveRouteTableIds
 * @property OpenZFSReadCacheConfiguration|null $ReadCacheConfiguration
 * @property string|null $EndpointIpv6AddressRange
 */
class UpdateFileSystemOpenZFSConfiguration extends Shape
{
    /**
     * @param array{
     *     AutomaticBackupRetentionDays?: int<0, 90>|null,
     *     CopyTagsToBackups?: bool|null,
     *     CopyTagsToVolumes?: bool|null,
     *     DailyAutomaticBackupStartTime?: string|null,
     *     ThroughputCapacity?: int<8, 100000>|null,
     *     WeeklyMaintenanceStartTime?: string|null,
     *     DiskIopsConfiguration?: DiskIopsConfiguration|null,
     *     AddRouteTableIds?: list<string>|null,
     *     RemoveRouteTableIds?: list<string>|null,
     *     ReadCacheConfiguration?: OpenZFSReadCacheConfiguration|null,
     *     EndpointIpv6AddressRange?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
