<?php

namespace Sunaoka\Aws\Structures\FSx\CreateBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 90>|null $AutomaticBackupRetentionDays
 * @property string|null $DailyAutomaticBackupStartTime
 * @property 'MULTI_AZ_1'|'SINGLE_AZ_1'|'SINGLE_AZ_2'|'MULTI_AZ_2'|null $DeploymentType
 * @property string|null $EndpointIpAddressRange
 * @property FileSystemEndpoints|null $Endpoints
 * @property DiskIopsConfiguration|null $DiskIopsConfiguration
 * @property string|null $PreferredSubnetId
 * @property list<string>|null $RouteTableIds
 * @property int<8, 100000>|null $ThroughputCapacity
 * @property string|null $WeeklyMaintenanceStartTime
 * @property string|null $FsxAdminPassword
 * @property int<1, 12>|null $HAPairs
 * @property int<128, 6144>|null $ThroughputCapacityPerHAPair
 * @property string|null $EndpointIpv6AddressRange
 */
class OntapFileSystemConfiguration extends Shape
{
    /**
     * @param array{
     *     AutomaticBackupRetentionDays?: int<0, 90>|null,
     *     DailyAutomaticBackupStartTime?: string|null,
     *     DeploymentType?: 'MULTI_AZ_1'|'SINGLE_AZ_1'|'SINGLE_AZ_2'|'MULTI_AZ_2'|null,
     *     EndpointIpAddressRange?: string|null,
     *     Endpoints?: FileSystemEndpoints|null,
     *     DiskIopsConfiguration?: DiskIopsConfiguration|null,
     *     PreferredSubnetId?: string|null,
     *     RouteTableIds?: list<string>|null,
     *     ThroughputCapacity?: int<8, 100000>|null,
     *     WeeklyMaintenanceStartTime?: string|null,
     *     FsxAdminPassword?: string|null,
     *     HAPairs?: int<1, 12>|null,
     *     ThroughputCapacityPerHAPair?: int<128, 6144>|null,
     *     EndpointIpv6AddressRange?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
