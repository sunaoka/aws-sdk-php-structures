<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DBName
 * @property string $ClusterIdentifier
 * @property string|null $ClusterType
 * @property string $NodeType
 * @property string $MasterUsername
 * @property string|null $MasterUserPassword
 * @property list<string>|null $ClusterSecurityGroups
 * @property list<string>|null $VpcSecurityGroupIds
 * @property string|null $ClusterSubnetGroupName
 * @property string|null $AvailabilityZone
 * @property string|null $PreferredMaintenanceWindow
 * @property string|null $ClusterParameterGroupName
 * @property int|null $AutomatedSnapshotRetentionPeriod
 * @property int|null $ManualSnapshotRetentionPeriod
 * @property int|null $Port
 * @property string|null $ClusterVersion
 * @property bool|null $AllowVersionUpgrade
 * @property int|null $NumberOfNodes
 * @property bool|null $PubliclyAccessible
 * @property bool|null $Encrypted
 * @property string|null $HsmClientCertificateIdentifier
 * @property string|null $HsmConfigurationIdentifier
 * @property string|null $ElasticIp
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $KmsKeyId
 * @property bool|null $EnhancedVpcRouting
 * @property string|null $AdditionalInfo
 * @property list<string>|null $IamRoles
 * @property string|null $MaintenanceTrackName
 * @property string|null $SnapshotScheduleIdentifier
 * @property bool|null $AvailabilityZoneRelocation
 * @property 'enabled'|'disabled'|'auto'|null $AquaConfigurationStatus
 * @property string|null $DefaultIamRoleArn
 * @property string|null $LoadSampleData
 * @property bool|null $ManageMasterPassword
 * @property string|null $MasterPasswordSecretKmsKeyId
 * @property string|null $IpAddressType
 * @property bool|null $MultiAZ
 * @property string|null $RedshiftIdcApplicationArn
 * @property string|null $CatalogName
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     DBName?: string|null,
     *     ClusterIdentifier: string,
     *     ClusterType?: string|null,
     *     NodeType: string,
     *     MasterUsername: string,
     *     MasterUserPassword?: string|null,
     *     ClusterSecurityGroups?: list<string>|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     ClusterSubnetGroupName?: string|null,
     *     AvailabilityZone?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     ClusterParameterGroupName?: string|null,
     *     AutomatedSnapshotRetentionPeriod?: int|null,
     *     ManualSnapshotRetentionPeriod?: int|null,
     *     Port?: int|null,
     *     ClusterVersion?: string|null,
     *     AllowVersionUpgrade?: bool|null,
     *     NumberOfNodes?: int|null,
     *     PubliclyAccessible?: bool|null,
     *     Encrypted?: bool|null,
     *     HsmClientCertificateIdentifier?: string|null,
     *     HsmConfigurationIdentifier?: string|null,
     *     ElasticIp?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     KmsKeyId?: string|null,
     *     EnhancedVpcRouting?: bool|null,
     *     AdditionalInfo?: string|null,
     *     IamRoles?: list<string>|null,
     *     MaintenanceTrackName?: string|null,
     *     SnapshotScheduleIdentifier?: string|null,
     *     AvailabilityZoneRelocation?: bool|null,
     *     AquaConfigurationStatus?: 'enabled'|'disabled'|'auto'|null,
     *     DefaultIamRoleArn?: string|null,
     *     LoadSampleData?: string|null,
     *     ManageMasterPassword?: bool|null,
     *     MasterPasswordSecretKmsKeyId?: string|null,
     *     IpAddressType?: string|null,
     *     MultiAZ?: bool|null,
     *     RedshiftIdcApplicationArn?: string|null,
     *     CatalogName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
