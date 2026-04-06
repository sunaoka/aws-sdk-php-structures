<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateReplicationInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicationSubnetGroupIdentifier
 * @property string|null $ReplicationSubnetGroupDescription
 * @property string|null $VpcId
 * @property string|null $SubnetGroupStatus
 * @property list<Subnet>|null $Subnets
 * @property list<string>|null $SupportedNetworkTypes
 * @property bool|null $IsReadOnly
 */
class ReplicationSubnetGroup extends Shape
{
    /**
     * @param array{
     *     ReplicationSubnetGroupIdentifier?: string|null,
     *     ReplicationSubnetGroupDescription?: string|null,
     *     VpcId?: string|null,
     *     SubnetGroupStatus?: string|null,
     *     Subnets?: list<Subnet>|null,
     *     SupportedNetworkTypes?: list<string>|null,
     *     IsReadOnly?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
