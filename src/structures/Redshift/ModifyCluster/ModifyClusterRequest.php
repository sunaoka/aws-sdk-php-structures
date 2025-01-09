<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $ClusterType
 * @property string $NodeType
 * @property int $NumberOfNodes
 * @property list<string> $ClusterSecurityGroups
 * @property list<string> $VpcSecurityGroupIds
 * @property string $MasterUserPassword
 * @property string $ClusterParameterGroupName
 * @property int $AutomatedSnapshotRetentionPeriod
 * @property int $ManualSnapshotRetentionPeriod
 * @property string $PreferredMaintenanceWindow
 * @property string $ClusterVersion
 * @property bool $AllowVersionUpgrade
 * @property string $HsmClientCertificateIdentifier
 * @property string $HsmConfigurationIdentifier
 * @property string $NewClusterIdentifier
 * @property bool $PubliclyAccessible
 * @property string $ElasticIp
 * @property bool $EnhancedVpcRouting
 * @property string $MaintenanceTrackName
 * @property bool $Encrypted
 * @property string $KmsKeyId
 * @property bool $AvailabilityZoneRelocation
 * @property string $AvailabilityZone
 * @property int $Port
 * @property bool $ManageMasterPassword
 * @property string $MasterPasswordSecretKmsKeyId
 * @property string $IpAddressType
 * @property bool $MultiAZ
 */
class ModifyClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     ClusterType?: string,
     *     NodeType?: string,
     *     NumberOfNodes?: int,
     *     ClusterSecurityGroups?: list<string>,
     *     VpcSecurityGroupIds?: list<string>,
     *     MasterUserPassword?: string,
     *     ClusterParameterGroupName?: string,
     *     AutomatedSnapshotRetentionPeriod?: int,
     *     ManualSnapshotRetentionPeriod?: int,
     *     PreferredMaintenanceWindow?: string,
     *     ClusterVersion?: string,
     *     AllowVersionUpgrade?: bool,
     *     HsmClientCertificateIdentifier?: string,
     *     HsmConfigurationIdentifier?: string,
     *     NewClusterIdentifier?: string,
     *     PubliclyAccessible?: bool,
     *     ElasticIp?: string,
     *     EnhancedVpcRouting?: bool,
     *     MaintenanceTrackName?: string,
     *     Encrypted?: bool,
     *     KmsKeyId?: string,
     *     AvailabilityZoneRelocation?: bool,
     *     AvailabilityZone?: string,
     *     Port?: int,
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
