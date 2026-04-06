<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AllocatedStorage
 * @property list<string>|null $AvailabilityZones
 * @property int|null $BackupRetentionPeriod
 * @property string|null $DatabaseName
 * @property string|null $Status
 * @property string|null $Endpoint
 * @property string|null $ReaderEndpoint
 * @property list<string>|null $CustomEndpoints
 * @property bool|null $MultiAz
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property int|null $Port
 * @property string|null $MasterUsername
 * @property string|null $PreferredBackupWindow
 * @property string|null $PreferredMaintenanceWindow
 * @property list<string>|null $ReadReplicaIdentifiers
 * @property list<AwsRdsDbInstanceVpcSecurityGroup>|null $VpcSecurityGroups
 * @property string|null $HostedZoneId
 * @property bool|null $StorageEncrypted
 * @property string|null $KmsKeyId
 * @property string|null $DbClusterResourceId
 * @property list<AwsRdsDbClusterAssociatedRole>|null $AssociatedRoles
 * @property string|null $ClusterCreateTime
 * @property list<string>|null $EnabledCloudWatchLogsExports
 * @property string|null $EngineMode
 * @property bool|null $DeletionProtection
 * @property bool|null $HttpEndpointEnabled
 * @property string|null $ActivityStreamStatus
 * @property bool|null $CopyTagsToSnapshot
 * @property bool|null $CrossAccountClone
 * @property list<AwsRdsDbDomainMembership>|null $DomainMemberships
 * @property string|null $DbClusterParameterGroup
 * @property string|null $DbSubnetGroup
 * @property list<AwsRdsDbClusterOptionGroupMembership>|null $DbClusterOptionGroupMemberships
 * @property string|null $DbClusterIdentifier
 * @property list<AwsRdsDbClusterMember>|null $DbClusterMembers
 * @property bool|null $IamDatabaseAuthenticationEnabled
 * @property bool|null $AutoMinorVersionUpgrade
 */
class AwsRdsDbClusterDetails extends Shape
{
    /**
     * @param array{
     *     AllocatedStorage?: int|null,
     *     AvailabilityZones?: list<string>|null,
     *     BackupRetentionPeriod?: int|null,
     *     DatabaseName?: string|null,
     *     Status?: string|null,
     *     Endpoint?: string|null,
     *     ReaderEndpoint?: string|null,
     *     CustomEndpoints?: list<string>|null,
     *     MultiAz?: bool|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     Port?: int|null,
     *     MasterUsername?: string|null,
     *     PreferredBackupWindow?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     ReadReplicaIdentifiers?: list<string>|null,
     *     VpcSecurityGroups?: list<AwsRdsDbInstanceVpcSecurityGroup>|null,
     *     HostedZoneId?: string|null,
     *     StorageEncrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     DbClusterResourceId?: string|null,
     *     AssociatedRoles?: list<AwsRdsDbClusterAssociatedRole>|null,
     *     ClusterCreateTime?: string|null,
     *     EnabledCloudWatchLogsExports?: list<string>|null,
     *     EngineMode?: string|null,
     *     DeletionProtection?: bool|null,
     *     HttpEndpointEnabled?: bool|null,
     *     ActivityStreamStatus?: string|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     CrossAccountClone?: bool|null,
     *     DomainMemberships?: list<AwsRdsDbDomainMembership>|null,
     *     DbClusterParameterGroup?: string|null,
     *     DbSubnetGroup?: string|null,
     *     DbClusterOptionGroupMemberships?: list<AwsRdsDbClusterOptionGroupMembership>|null,
     *     DbClusterIdentifier?: string|null,
     *     DbClusterMembers?: list<AwsRdsDbClusterMember>|null,
     *     IamDatabaseAuthenticationEnabled?: bool|null,
     *     AutoMinorVersionUpgrade?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
