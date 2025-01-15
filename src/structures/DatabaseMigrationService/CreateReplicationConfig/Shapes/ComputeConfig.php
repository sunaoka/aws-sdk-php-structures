<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateReplicationConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property string|null $DnsNameServers
 * @property string|null $KmsKeyId
 * @property int|null $MaxCapacityUnits
 * @property int|null $MinCapacityUnits
 * @property bool|null $MultiAZ
 * @property string|null $PreferredMaintenanceWindow
 * @property string|null $ReplicationSubnetGroupId
 * @property list<string>|null $VpcSecurityGroupIds
 */
class ComputeConfig extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     DnsNameServers?: string|null,
     *     KmsKeyId?: string|null,
     *     MaxCapacityUnits?: int|null,
     *     MinCapacityUnits?: int|null,
     *     MultiAZ?: bool|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     ReplicationSubnetGroupId?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
