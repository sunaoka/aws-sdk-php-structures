<?php

namespace Sunaoka\Aws\Structures\Redshift\RestoreFromClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string|null $SnapshotIdentifier
 * @property string|null $SnapshotArn
 * @property string|null $SnapshotClusterIdentifier
 * @property int|null $Port
 * @property string|null $AvailabilityZone
 * @property bool|null $AllowVersionUpgrade
 * @property string|null $ClusterSubnetGroupName
 * @property bool|null $PubliclyAccessible
 * @property string|null $OwnerAccount
 * @property string|null $HsmClientCertificateIdentifier
 * @property string|null $HsmConfigurationIdentifier
 * @property string|null $ElasticIp
 * @property string|null $ClusterParameterGroupName
 * @property list<string>|null $ClusterSecurityGroups
 * @property list<string>|null $VpcSecurityGroupIds
 * @property string|null $PreferredMaintenanceWindow
 * @property int|null $AutomatedSnapshotRetentionPeriod
 * @property int|null $ManualSnapshotRetentionPeriod
 * @property string|null $KmsKeyId
 * @property string|null $NodeType
 * @property bool|null $EnhancedVpcRouting
 * @property string|null $AdditionalInfo
 * @property list<string>|null $IamRoles
 * @property string|null $MaintenanceTrackName
 * @property string|null $SnapshotScheduleIdentifier
 * @property int|null $NumberOfNodes
 * @property bool|null $AvailabilityZoneRelocation
 * @property 'enabled'|'disabled'|'auto'|null $AquaConfigurationStatus
 * @property string|null $DefaultIamRoleArn
 * @property string|null $ReservedNodeId
 * @property string|null $TargetReservedNodeOfferingId
 * @property bool|null $Encrypted
 * @property bool|null $ManageMasterPassword
 * @property string|null $MasterPasswordSecretKmsKeyId
 * @property string|null $IpAddressType
 * @property bool|null $MultiAZ
 * @property string|null $CatalogName
 * @property string|null $RedshiftIdcApplicationArn
 */
class RestoreFromClusterSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     SnapshotIdentifier?: string|null,
     *     SnapshotArn?: string|null,
     *     SnapshotClusterIdentifier?: string|null,
     *     Port?: int|null,
     *     AvailabilityZone?: string|null,
     *     AllowVersionUpgrade?: bool|null,
     *     ClusterSubnetGroupName?: string|null,
     *     PubliclyAccessible?: bool|null,
     *     OwnerAccount?: string|null,
     *     HsmClientCertificateIdentifier?: string|null,
     *     HsmConfigurationIdentifier?: string|null,
     *     ElasticIp?: string|null,
     *     ClusterParameterGroupName?: string|null,
     *     ClusterSecurityGroups?: list<string>|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     AutomatedSnapshotRetentionPeriod?: int|null,
     *     ManualSnapshotRetentionPeriod?: int|null,
     *     KmsKeyId?: string|null,
     *     NodeType?: string|null,
     *     EnhancedVpcRouting?: bool|null,
     *     AdditionalInfo?: string|null,
     *     IamRoles?: list<string>|null,
     *     MaintenanceTrackName?: string|null,
     *     SnapshotScheduleIdentifier?: string|null,
     *     NumberOfNodes?: int|null,
     *     AvailabilityZoneRelocation?: bool|null,
     *     AquaConfigurationStatus?: 'enabled'|'disabled'|'auto'|null,
     *     DefaultIamRoleArn?: string|null,
     *     ReservedNodeId?: string|null,
     *     TargetReservedNodeOfferingId?: string|null,
     *     Encrypted?: bool|null,
     *     ManageMasterPassword?: bool|null,
     *     MasterPasswordSecretKmsKeyId?: string|null,
     *     IpAddressType?: string|null,
     *     MultiAZ?: bool|null,
     *     CatalogName?: string|null,
     *     RedshiftIdcApplicationArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
