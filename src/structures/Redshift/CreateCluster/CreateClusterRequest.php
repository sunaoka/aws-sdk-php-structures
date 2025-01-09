<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBName
 * @property string $ClusterIdentifier
 * @property string $ClusterType
 * @property string $NodeType
 * @property string $MasterUsername
 * @property string $MasterUserPassword
 * @property list<string> $ClusterSecurityGroups
 * @property list<string> $VpcSecurityGroupIds
 * @property string $ClusterSubnetGroupName
 * @property string $AvailabilityZone
 * @property string $PreferredMaintenanceWindow
 * @property string $ClusterParameterGroupName
 * @property int $AutomatedSnapshotRetentionPeriod
 * @property int $ManualSnapshotRetentionPeriod
 * @property int $Port
 * @property string $ClusterVersion
 * @property bool $AllowVersionUpgrade
 * @property int $NumberOfNodes
 * @property bool $PubliclyAccessible
 * @property bool $Encrypted
 * @property string $HsmClientCertificateIdentifier
 * @property string $HsmConfigurationIdentifier
 * @property string $ElasticIp
 * @property list<Shapes\Tag> $Tags
 * @property string $KmsKeyId
 * @property bool $EnhancedVpcRouting
 * @property string $AdditionalInfo
 * @property list<string> $IamRoles
 * @property string $MaintenanceTrackName
 * @property string $SnapshotScheduleIdentifier
 * @property bool $AvailabilityZoneRelocation
 * @property 'enabled'|'disabled'|'auto' $AquaConfigurationStatus
 * @property string $DefaultIamRoleArn
 * @property string $LoadSampleData
 * @property bool $ManageMasterPassword
 * @property string $MasterPasswordSecretKmsKeyId
 * @property string $IpAddressType
 * @property bool $MultiAZ
 * @property string $RedshiftIdcApplicationArn
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     DBName?: string,
     *     ClusterIdentifier: string,
     *     ClusterType?: string,
     *     NodeType: string,
     *     MasterUsername: string,
     *     MasterUserPassword?: string,
     *     ClusterSecurityGroups?: list<string>,
     *     VpcSecurityGroupIds?: list<string>,
     *     ClusterSubnetGroupName?: string,
     *     AvailabilityZone?: string,
     *     PreferredMaintenanceWindow?: string,
     *     ClusterParameterGroupName?: string,
     *     AutomatedSnapshotRetentionPeriod?: int,
     *     ManualSnapshotRetentionPeriod?: int,
     *     Port?: int,
     *     ClusterVersion?: string,
     *     AllowVersionUpgrade?: bool,
     *     NumberOfNodes?: int,
     *     PubliclyAccessible?: bool,
     *     Encrypted?: bool,
     *     HsmClientCertificateIdentifier?: string,
     *     HsmConfigurationIdentifier?: string,
     *     ElasticIp?: string,
     *     Tags?: list<Shapes\Tag>,
     *     KmsKeyId?: string,
     *     EnhancedVpcRouting?: bool,
     *     AdditionalInfo?: string,
     *     IamRoles?: list<string>,
     *     MaintenanceTrackName?: string,
     *     SnapshotScheduleIdentifier?: string,
     *     AvailabilityZoneRelocation?: bool,
     *     AquaConfigurationStatus?: 'enabled'|'disabled'|'auto',
     *     DefaultIamRoleArn?: string,
     *     LoadSampleData?: string,
     *     ManageMasterPassword?: bool,
     *     MasterPasswordSecretKmsKeyId?: string,
     *     IpAddressType?: string,
     *     MultiAZ?: bool,
     *     RedshiftIdcApplicationArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
