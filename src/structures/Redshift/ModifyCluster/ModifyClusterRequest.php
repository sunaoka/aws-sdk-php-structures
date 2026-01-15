<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string|null $ClusterType
 * @property string|null $NodeType
 * @property int|null $NumberOfNodes
 * @property list<string>|null $ClusterSecurityGroups
 * @property list<string>|null $VpcSecurityGroupIds
 * @property string|null $MasterUserPassword
 * @property string|null $ClusterParameterGroupName
 * @property int|null $AutomatedSnapshotRetentionPeriod
 * @property int|null $ManualSnapshotRetentionPeriod
 * @property string|null $PreferredMaintenanceWindow
 * @property string|null $ClusterVersion
 * @property bool|null $AllowVersionUpgrade
 * @property string|null $HsmClientCertificateIdentifier
 * @property string|null $HsmConfigurationIdentifier
 * @property string|null $NewClusterIdentifier
 * @property bool|null $PubliclyAccessible
 * @property string|null $ElasticIp
 * @property bool|null $EnhancedVpcRouting
 * @property string|null $MaintenanceTrackName
 * @property bool|null $Encrypted
 * @property string|null $KmsKeyId
 * @property bool|null $AvailabilityZoneRelocation
 * @property string|null $AvailabilityZone
 * @property int|null $Port
 * @property bool|null $ManageMasterPassword
 * @property string|null $MasterPasswordSecretKmsKeyId
 * @property string|null $IpAddressType
 * @property bool|null $MultiAZ
 * @property bool|null $ExtraComputeForAutomaticOptimization
 */
class ModifyClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     ClusterType?: string|null,
     *     NodeType?: string|null,
     *     NumberOfNodes?: int|null,
     *     ClusterSecurityGroups?: list<string>|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     MasterUserPassword?: string|null,
     *     ClusterParameterGroupName?: string|null,
     *     AutomatedSnapshotRetentionPeriod?: int|null,
     *     ManualSnapshotRetentionPeriod?: int|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     ClusterVersion?: string|null,
     *     AllowVersionUpgrade?: bool|null,
     *     HsmClientCertificateIdentifier?: string|null,
     *     HsmConfigurationIdentifier?: string|null,
     *     NewClusterIdentifier?: string|null,
     *     PubliclyAccessible?: bool|null,
     *     ElasticIp?: string|null,
     *     EnhancedVpcRouting?: bool|null,
     *     MaintenanceTrackName?: string|null,
     *     Encrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     AvailabilityZoneRelocation?: bool|null,
     *     AvailabilityZone?: string|null,
     *     Port?: int|null,
     *     ManageMasterPassword?: bool|null,
     *     MasterPasswordSecretKmsKeyId?: string|null,
     *     IpAddressType?: string|null,
     *     MultiAZ?: bool|null,
     *     ExtraComputeForAutomaticOptimization?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
