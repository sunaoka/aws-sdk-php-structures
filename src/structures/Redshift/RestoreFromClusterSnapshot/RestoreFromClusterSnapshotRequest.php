<?php

namespace Sunaoka\Aws\Structures\Redshift\RestoreFromClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $SnapshotIdentifier
 * @property string $SnapshotArn
 * @property string $SnapshotClusterIdentifier
 * @property int $Port
 * @property string $AvailabilityZone
 * @property bool $AllowVersionUpgrade
 * @property string $ClusterSubnetGroupName
 * @property bool $PubliclyAccessible
 * @property string $OwnerAccount
 * @property string $HsmClientCertificateIdentifier
 * @property string $HsmConfigurationIdentifier
 * @property string $ElasticIp
 * @property string $ClusterParameterGroupName
 * @property list<string> $ClusterSecurityGroups
 * @property list<string> $VpcSecurityGroupIds
 * @property string $PreferredMaintenanceWindow
 * @property int $AutomatedSnapshotRetentionPeriod
 * @property int $ManualSnapshotRetentionPeriod
 * @property string $KmsKeyId
 * @property string $NodeType
 * @property bool $EnhancedVpcRouting
 * @property string $AdditionalInfo
 * @property list<string> $IamRoles
 * @property string $MaintenanceTrackName
 * @property string $SnapshotScheduleIdentifier
 * @property int $NumberOfNodes
 * @property bool $AvailabilityZoneRelocation
 * @property 'enabled'|'disabled'|'auto' $AquaConfigurationStatus
 * @property string $DefaultIamRoleArn
 * @property string $ReservedNodeId
 * @property string $TargetReservedNodeOfferingId
 * @property bool $Encrypted
 * @property bool $ManageMasterPassword
 * @property string $MasterPasswordSecretKmsKeyId
 * @property string $IpAddressType
 * @property bool $MultiAZ
 */
class RestoreFromClusterSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     SnapshotIdentifier?: string,
     *     SnapshotArn?: string,
     *     SnapshotClusterIdentifier?: string,
     *     Port?: int,
     *     AvailabilityZone?: string,
     *     AllowVersionUpgrade?: bool,
     *     ClusterSubnetGroupName?: string,
     *     PubliclyAccessible?: bool,
     *     OwnerAccount?: string,
     *     HsmClientCertificateIdentifier?: string,
     *     HsmConfigurationIdentifier?: string,
     *     ElasticIp?: string,
     *     ClusterParameterGroupName?: string,
     *     ClusterSecurityGroups?: list<string>,
     *     VpcSecurityGroupIds?: list<string>,
     *     PreferredMaintenanceWindow?: string,
     *     AutomatedSnapshotRetentionPeriod?: int,
     *     ManualSnapshotRetentionPeriod?: int,
     *     KmsKeyId?: string,
     *     NodeType?: string,
     *     EnhancedVpcRouting?: bool,
     *     AdditionalInfo?: string,
     *     IamRoles?: list<string>,
     *     MaintenanceTrackName?: string,
     *     SnapshotScheduleIdentifier?: string,
     *     NumberOfNodes?: int,
     *     AvailabilityZoneRelocation?: bool,
     *     AquaConfigurationStatus?: 'enabled'|'disabled'|'auto',
     *     DefaultIamRoleArn?: string,
     *     ReservedNodeId?: string,
     *     TargetReservedNodeOfferingId?: string,
     *     Encrypted?: bool,
     *     ManageMasterPassword?: bool,
     *     MasterPasswordSecretKmsKeyId?: string,
     *     IpAddressType?: string,
     *     MultiAZ?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
