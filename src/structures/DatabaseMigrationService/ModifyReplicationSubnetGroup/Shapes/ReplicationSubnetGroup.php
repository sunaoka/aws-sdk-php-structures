<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyReplicationSubnetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplicationSubnetGroupIdentifier
 * @property string $ReplicationSubnetGroupDescription
 * @property string $VpcId
 * @property string $SubnetGroupStatus
 * @property list<Subnet> $Subnets
 * @property list<string> $SupportedNetworkTypes
 */
class ReplicationSubnetGroup extends Shape
{
    /**
     * @param array{
     *     ReplicationSubnetGroupIdentifier?: string,
     *     ReplicationSubnetGroupDescription?: string,
     *     VpcId?: string,
     *     SubnetGroupStatus?: string,
     *     Subnets?: list<Subnet>,
     *     SupportedNetworkTypes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
