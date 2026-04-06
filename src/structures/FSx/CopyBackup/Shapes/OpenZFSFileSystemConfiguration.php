<?php

namespace Sunaoka\Aws\Structures\FSx\CopyBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 90>|null $AutomaticBackupRetentionDays
 * @property bool|null $CopyTagsToBackups
 * @property bool|null $CopyTagsToVolumes
 * @property string|null $DailyAutomaticBackupStartTime
 * @property 'SINGLE_AZ_1'|'SINGLE_AZ_2'|'SINGLE_AZ_HA_1'|'SINGLE_AZ_HA_2'|'MULTI_AZ_1'|null $DeploymentType
 * @property int<8, 100000>|null $ThroughputCapacity
 * @property string|null $WeeklyMaintenanceStartTime
 * @property DiskIopsConfiguration|null $DiskIopsConfiguration
 * @property string|null $RootVolumeId
 * @property string|null $PreferredSubnetId
 * @property string|null $EndpointIpAddressRange
 * @property list<string>|null $RouteTableIds
 * @property string|null $EndpointIpAddress
 * @property OpenZFSReadCacheConfiguration|null $ReadCacheConfiguration
 */
class OpenZFSFileSystemConfiguration extends Shape
{
    /**
     * @param array{
     *     AutomaticBackupRetentionDays?: int<0, 90>|null,
     *     CopyTagsToBackups?: bool|null,
     *     CopyTagsToVolumes?: bool|null,
     *     DailyAutomaticBackupStartTime?: string|null,
     *     DeploymentType?: 'SINGLE_AZ_1'|'SINGLE_AZ_2'|'SINGLE_AZ_HA_1'|'SINGLE_AZ_HA_2'|'MULTI_AZ_1'|null,
     *     ThroughputCapacity?: int<8, 100000>|null,
     *     WeeklyMaintenanceStartTime?: string|null,
     *     DiskIopsConfiguration?: DiskIopsConfiguration|null,
     *     RootVolumeId?: string|null,
     *     PreferredSubnetId?: string|null,
     *     EndpointIpAddressRange?: string|null,
     *     RouteTableIds?: list<string>|null,
     *     EndpointIpAddress?: string|null,
     *     ReadCacheConfiguration?: OpenZFSReadCacheConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
