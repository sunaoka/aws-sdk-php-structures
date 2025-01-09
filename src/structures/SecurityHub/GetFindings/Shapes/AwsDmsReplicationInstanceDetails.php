<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AllocatedStorage
 * @property bool $AutoMinorVersionUpgrade
 * @property string $AvailabilityZone
 * @property string $EngineVersion
 * @property string $KmsKeyId
 * @property bool $MultiAZ
 * @property string $PreferredMaintenanceWindow
 * @property bool $PubliclyAccessible
 * @property string $ReplicationInstanceClass
 * @property string $ReplicationInstanceIdentifier
 * @property AwsDmsReplicationInstanceReplicationSubnetGroupDetails $ReplicationSubnetGroup
 * @property list<AwsDmsReplicationInstanceVpcSecurityGroupsDetails> $VpcSecurityGroups
 */
class AwsDmsReplicationInstanceDetails extends Shape
{
    /**
     * @param array{
     *     AllocatedStorage?: int,
     *     AutoMinorVersionUpgrade?: bool,
     *     AvailabilityZone?: string,
     *     EngineVersion?: string,
     *     KmsKeyId?: string,
     *     MultiAZ?: bool,
     *     PreferredMaintenanceWindow?: string,
     *     PubliclyAccessible?: bool,
     *     ReplicationInstanceClass?: string,
     *     ReplicationInstanceIdentifier?: string,
     *     ReplicationSubnetGroup?: AwsDmsReplicationInstanceReplicationSubnetGroupDetails,
     *     VpcSecurityGroups?: list<AwsDmsReplicationInstanceVpcSecurityGroupsDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
