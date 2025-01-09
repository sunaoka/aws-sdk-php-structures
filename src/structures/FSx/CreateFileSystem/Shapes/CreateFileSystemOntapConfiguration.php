<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 90> $AutomaticBackupRetentionDays
 * @property string $DailyAutomaticBackupStartTime
 * @property 'MULTI_AZ_1'|'SINGLE_AZ_1'|'SINGLE_AZ_2'|'MULTI_AZ_2' $DeploymentType
 * @property string $EndpointIpAddressRange
 * @property string $FsxAdminPassword
 * @property DiskIopsConfiguration $DiskIopsConfiguration
 * @property string $PreferredSubnetId
 * @property list<string> $RouteTableIds
 * @property int<8, 100000> $ThroughputCapacity
 * @property string $WeeklyMaintenanceStartTime
 * @property int<1, 12> $HAPairs
 * @property int<128, 6144> $ThroughputCapacityPerHAPair
 */
class CreateFileSystemOntapConfiguration extends Shape
{
    /**
     * @param array{
     *     AutomaticBackupRetentionDays?: int<0, 90>,
     *     DailyAutomaticBackupStartTime?: string,
     *     DeploymentType: 'MULTI_AZ_1'|'SINGLE_AZ_1'|'SINGLE_AZ_2'|'MULTI_AZ_2',
     *     EndpointIpAddressRange?: string,
     *     FsxAdminPassword?: string,
     *     DiskIopsConfiguration?: DiskIopsConfiguration,
     *     PreferredSubnetId?: string,
     *     RouteTableIds?: list<string>,
     *     ThroughputCapacity?: int<8, 100000>,
     *     WeeklyMaintenanceStartTime?: string,
     *     HAPairs?: int<1, 12>,
     *     ThroughputCapacityPerHAPair?: int<128, 6144>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
