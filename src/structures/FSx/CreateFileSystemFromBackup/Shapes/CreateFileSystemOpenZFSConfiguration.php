<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystemFromBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 90>|null $AutomaticBackupRetentionDays
 * @property bool|null $CopyTagsToBackups
 * @property bool|null $CopyTagsToVolumes
 * @property string|null $DailyAutomaticBackupStartTime
 * @property 'SINGLE_AZ_1'|'SINGLE_AZ_2'|'SINGLE_AZ_HA_1'|'SINGLE_AZ_HA_2'|'MULTI_AZ_1' $DeploymentType
 * @property int<8, 100000> $ThroughputCapacity
 * @property string|null $WeeklyMaintenanceStartTime
 * @property DiskIopsConfiguration|null $DiskIopsConfiguration
 * @property OpenZFSCreateRootVolumeConfiguration|null $RootVolumeConfiguration
 * @property string|null $PreferredSubnetId
 * @property string|null $EndpointIpAddressRange
 * @property string|null $EndpointIpv6AddressRange
 * @property list<string>|null $RouteTableIds
 * @property OpenZFSReadCacheConfiguration|null $ReadCacheConfiguration
 */
class CreateFileSystemOpenZFSConfiguration extends Shape
{
    /**
     * @param array{
     *     AutomaticBackupRetentionDays?: int<0, 90>|null,
     *     CopyTagsToBackups?: bool|null,
     *     CopyTagsToVolumes?: bool|null,
     *     DailyAutomaticBackupStartTime?: string|null,
     *     DeploymentType: 'SINGLE_AZ_1'|'SINGLE_AZ_2'|'SINGLE_AZ_HA_1'|'SINGLE_AZ_HA_2'|'MULTI_AZ_1',
     *     ThroughputCapacity: int<8, 100000>,
     *     WeeklyMaintenanceStartTime?: string|null,
     *     DiskIopsConfiguration?: DiskIopsConfiguration|null,
     *     RootVolumeConfiguration?: OpenZFSCreateRootVolumeConfiguration|null,
     *     PreferredSubnetId?: string|null,
     *     EndpointIpAddressRange?: string|null,
     *     EndpointIpv6AddressRange?: string|null,
     *     RouteTableIds?: list<string>|null,
     *     ReadCacheConfiguration?: OpenZFSReadCacheConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
