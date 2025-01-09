<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeFileSystems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AutomaticBackupRetentionDays
 * @property string $DailyAutomaticBackupStartTime
 * @property 'MULTI_AZ_1'|'SINGLE_AZ_1'|'SINGLE_AZ_2'|'MULTI_AZ_2' $DeploymentType
 * @property string $EndpointIpAddressRange
 * @property FileSystemEndpoints $Endpoints
 * @property DiskIopsConfiguration $DiskIopsConfiguration
 * @property string $PreferredSubnetId
 * @property list<string> $RouteTableIds
 * @property int $ThroughputCapacity
 * @property string $WeeklyMaintenanceStartTime
 * @property string $FsxAdminPassword
 * @property int $HAPairs
 * @property int $ThroughputCapacityPerHAPair
 */
class OntapFileSystemConfiguration extends Shape
{
    /**
     * @param array{
     *     AutomaticBackupRetentionDays?: int,
     *     DailyAutomaticBackupStartTime?: string,
     *     DeploymentType?: 'MULTI_AZ_1'|'SINGLE_AZ_1'|'SINGLE_AZ_2'|'MULTI_AZ_2',
     *     EndpointIpAddressRange?: string,
     *     Endpoints?: FileSystemEndpoints,
     *     DiskIopsConfiguration?: DiskIopsConfiguration,
     *     PreferredSubnetId?: string,
     *     RouteTableIds?: list<string>,
     *     ThroughputCapacity?: int,
     *     WeeklyMaintenanceStartTime?: string,
     *     FsxAdminPassword?: string,
     *     HAPairs?: int,
     *     ThroughputCapacityPerHAPair?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
