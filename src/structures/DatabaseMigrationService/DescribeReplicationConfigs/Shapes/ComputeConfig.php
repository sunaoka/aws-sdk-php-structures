<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property string $DnsNameServers
 * @property string $KmsKeyId
 * @property int $MaxCapacityUnits
 * @property int $MinCapacityUnits
 * @property bool $MultiAZ
 * @property string $PreferredMaintenanceWindow
 * @property string $ReplicationSubnetGroupId
 * @property list<string> $VpcSecurityGroupIds
 */
class ComputeConfig extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     DnsNameServers?: string,
     *     KmsKeyId?: string,
     *     MaxCapacityUnits?: int,
     *     MinCapacityUnits?: int,
     *     MultiAZ?: bool,
     *     PreferredMaintenanceWindow?: string,
     *     ReplicationSubnetGroupId?: string,
     *     VpcSecurityGroupIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
