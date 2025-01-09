<?php

namespace Sunaoka\Aws\Structures\DocDB\DeleteDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AvailabilityZones
 * @property int $BackupRetentionPeriod
 * @property string $DBClusterIdentifier
 * @property string $DBClusterParameterGroup
 * @property string $DBSubnetGroup
 * @property string $Status
 * @property string $PercentProgress
 * @property \Aws\Api\DateTimeResult $EarliestRestorableTime
 * @property string $Endpoint
 * @property string $ReaderEndpoint
 * @property bool $MultiAZ
 * @property string $Engine
 * @property string $EngineVersion
 * @property \Aws\Api\DateTimeResult $LatestRestorableTime
 * @property int $Port
 * @property string $MasterUsername
 * @property string $PreferredBackupWindow
 * @property string $PreferredMaintenanceWindow
 * @property string $ReplicationSourceIdentifier
 * @property list<string> $ReadReplicaIdentifiers
 * @property list<DBClusterMember> $DBClusterMembers
 * @property list<VpcSecurityGroupMembership> $VpcSecurityGroups
 * @property string $HostedZoneId
 * @property bool $StorageEncrypted
 * @property string $KmsKeyId
 * @property string $DbClusterResourceId
 * @property string $DBClusterArn
 * @property list<DBClusterRole> $AssociatedRoles
 * @property string $CloneGroupId
 * @property \Aws\Api\DateTimeResult $ClusterCreateTime
 * @property list<string> $EnabledCloudwatchLogsExports
 * @property bool $DeletionProtection
 * @property string $StorageType
 * @property ClusterMasterUserSecret $MasterUserSecret
 */
class DBCluster extends Shape
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>,
     *     BackupRetentionPeriod?: int,
     *     DBClusterIdentifier?: string,
     *     DBClusterParameterGroup?: string,
     *     DBSubnetGroup?: string,
     *     Status?: string,
     *     PercentProgress?: string,
     *     EarliestRestorableTime?: \Aws\Api\DateTimeResult,
     *     Endpoint?: string,
     *     ReaderEndpoint?: string,
     *     MultiAZ?: bool,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     LatestRestorableTime?: \Aws\Api\DateTimeResult,
     *     Port?: int,
     *     MasterUsername?: string,
     *     PreferredBackupWindow?: string,
     *     PreferredMaintenanceWindow?: string,
     *     ReplicationSourceIdentifier?: string,
     *     ReadReplicaIdentifiers?: list<string>,
     *     DBClusterMembers?: list<DBClusterMember>,
     *     VpcSecurityGroups?: list<VpcSecurityGroupMembership>,
     *     HostedZoneId?: string,
     *     StorageEncrypted?: bool,
     *     KmsKeyId?: string,
     *     DbClusterResourceId?: string,
     *     DBClusterArn?: string,
     *     AssociatedRoles?: list<DBClusterRole>,
     *     CloneGroupId?: string,
     *     ClusterCreateTime?: \Aws\Api\DateTimeResult,
     *     EnabledCloudwatchLogsExports?: list<string>,
     *     DeletionProtection?: bool,
     *     StorageType?: string,
     *     MasterUserSecret?: ClusterMasterUserSecret
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
