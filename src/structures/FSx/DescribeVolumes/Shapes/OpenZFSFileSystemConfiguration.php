<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 90> $AutomaticBackupRetentionDays
 * @property bool $CopyTagsToBackups
 * @property bool $CopyTagsToVolumes
 * @property string $DailyAutomaticBackupStartTime
 * @property 'SINGLE_AZ_1'|'SINGLE_AZ_2'|'SINGLE_AZ_HA_1'|'SINGLE_AZ_HA_2'|'MULTI_AZ_1' $DeploymentType
 * @property int<8, 100000> $ThroughputCapacity
 * @property string $WeeklyMaintenanceStartTime
 * @property DiskIopsConfiguration $DiskIopsConfiguration
 * @property string $RootVolumeId
 * @property string $PreferredSubnetId
 * @property string $EndpointIpAddressRange
 * @property list<string> $RouteTableIds
 * @property string $EndpointIpAddress
 * @property OpenZFSReadCacheConfiguration $ReadCacheConfiguration
 */
class OpenZFSFileSystemConfiguration extends Shape
{
    /**
     * @param array{
     *     AutomaticBackupRetentionDays?: int<0, 90>,
     *     CopyTagsToBackups?: bool,
     *     CopyTagsToVolumes?: bool,
     *     DailyAutomaticBackupStartTime?: string,
     *     DeploymentType?: 'SINGLE_AZ_1'|'SINGLE_AZ_2'|'SINGLE_AZ_HA_1'|'SINGLE_AZ_HA_2'|'MULTI_AZ_1',
     *     ThroughputCapacity?: int<8, 100000>,
     *     WeeklyMaintenanceStartTime?: string,
     *     DiskIopsConfiguration?: DiskIopsConfiguration,
     *     RootVolumeId?: string,
     *     PreferredSubnetId?: string,
     *     EndpointIpAddressRange?: string,
     *     RouteTableIds?: list<string>,
     *     EndpointIpAddress?: string,
     *     ReadCacheConfiguration?: OpenZFSReadCacheConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
