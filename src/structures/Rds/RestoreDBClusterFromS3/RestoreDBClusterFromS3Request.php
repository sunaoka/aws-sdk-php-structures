<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBClusterFromS3;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $AvailabilityZones
 * @property int|null $BackupRetentionPeriod
 * @property string|null $CharacterSetName
 * @property string|null $DatabaseName
 * @property string $DBClusterIdentifier
 * @property string|null $DBClusterParameterGroupName
 * @property list<string>|null $VpcSecurityGroupIds
 * @property string|null $DBSubnetGroupName
 * @property string $Engine
 * @property string|null $EngineVersion
 * @property int|null $Port
 * @property string $MasterUsername
 * @property string|null $MasterUserPassword
 * @property string|null $OptionGroupName
 * @property string|null $PreferredBackupWindow
 * @property string|null $PreferredMaintenanceWindow
 * @property list<Shapes\Tag>|null $Tags
 * @property bool|null $StorageEncrypted
 * @property string|null $KmsKeyId
 * @property bool|null $EnableIAMDatabaseAuthentication
 * @property string $SourceEngine
 * @property string $SourceEngineVersion
 * @property string $S3BucketName
 * @property string|null $S3Prefix
 * @property string $S3IngestionRoleArn
 * @property int|null $BacktrackWindow
 * @property list<string>|null $EnableCloudwatchLogsExports
 * @property bool|null $DeletionProtection
 * @property bool|null $CopyTagsToSnapshot
 * @property string|null $Domain
 * @property string|null $DomainIAMRoleName
 * @property string|null $StorageType
 * @property string|null $NetworkType
 * @property Shapes\ServerlessV2ScalingConfiguration|null $ServerlessV2ScalingConfiguration
 * @property bool|null $ManageMasterUserPassword
 * @property string|null $MasterUserSecretKmsKeyId
 * @property string|null $EngineLifecycleSupport
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class RestoreDBClusterFromS3Request extends Request
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>|null,
     *     BackupRetentionPeriod?: int|null,
     *     CharacterSetName?: string|null,
     *     DatabaseName?: string|null,
     *     DBClusterIdentifier: string,
     *     DBClusterParameterGroupName?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     DBSubnetGroupName?: string|null,
     *     Engine: string,
     *     EngineVersion?: string|null,
     *     Port?: int|null,
     *     MasterUsername: string,
     *     MasterUserPassword?: string|null,
     *     OptionGroupName?: string|null,
     *     PreferredBackupWindow?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     StorageEncrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     EnableIAMDatabaseAuthentication?: bool|null,
     *     SourceEngine: string,
     *     SourceEngineVersion: string,
     *     S3BucketName: string,
     *     S3Prefix?: string|null,
     *     S3IngestionRoleArn: string,
     *     BacktrackWindow?: int|null,
     *     EnableCloudwatchLogsExports?: list<string>|null,
     *     DeletionProtection?: bool|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     Domain?: string|null,
     *     DomainIAMRoleName?: string|null,
     *     StorageType?: string|null,
     *     NetworkType?: string|null,
     *     ServerlessV2ScalingConfiguration?: Shapes\ServerlessV2ScalingConfiguration|null,
     *     ManageMasterUserPassword?: bool|null,
     *     MasterUserSecretKmsKeyId?: string|null,
     *     EngineLifecycleSupport?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
