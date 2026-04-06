<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AllocatedStorage
 * @property bool|null $AutoMinorVersionUpgrade
 * @property string|null $AvailabilityZone
 * @property string|null $EngineVersion
 * @property string|null $KmsKeyId
 * @property bool|null $MultiAZ
 * @property string|null $PreferredMaintenanceWindow
 * @property bool|null $PubliclyAccessible
 * @property string|null $ReplicationInstanceClass
 * @property string|null $ReplicationInstanceIdentifier
 * @property AwsDmsReplicationInstanceReplicationSubnetGroupDetails|null $ReplicationSubnetGroup
 * @property list<AwsDmsReplicationInstanceVpcSecurityGroupsDetails>|null $VpcSecurityGroups
 */
class AwsDmsReplicationInstanceDetails extends Shape
{
    /**
     * @param array{
     *     AllocatedStorage?: int|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     AvailabilityZone?: string|null,
     *     EngineVersion?: string|null,
     *     KmsKeyId?: string|null,
     *     MultiAZ?: bool|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     PubliclyAccessible?: bool|null,
     *     ReplicationInstanceClass?: string|null,
     *     ReplicationInstanceIdentifier?: string|null,
     *     ReplicationSubnetGroup?: AwsDmsReplicationInstanceReplicationSubnetGroupDetails|null,
     *     VpcSecurityGroups?: list<AwsDmsReplicationInstanceVpcSecurityGroupsDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
