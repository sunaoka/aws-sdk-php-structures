<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBClusterFromS3;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AvailabilityZones
 * @property int $BackupRetentionPeriod
 * @property string $CharacterSetName
 * @property string $DatabaseName
 * @property string $DBClusterIdentifier
 * @property string $DBClusterParameterGroupName
 * @property list<string> $VpcSecurityGroupIds
 * @property string $DBSubnetGroupName
 * @property string $Engine
 * @property string $EngineVersion
 * @property int $Port
 * @property string $MasterUsername
 * @property string $MasterUserPassword
 * @property string $OptionGroupName
 * @property string $PreferredBackupWindow
 * @property string $PreferredMaintenanceWindow
 * @property list<Shapes\Tag> $Tags
 * @property bool $StorageEncrypted
 * @property string $KmsKeyId
 * @property bool $EnableIAMDatabaseAuthentication
 * @property string $SourceEngine
 * @property string $SourceEngineVersion
 * @property string $S3BucketName
 * @property string $S3Prefix
 * @property string $S3IngestionRoleArn
 * @property int $BacktrackWindow
 * @property list<string> $EnableCloudwatchLogsExports
 * @property bool $DeletionProtection
 * @property bool $CopyTagsToSnapshot
 * @property string $Domain
 * @property string $DomainIAMRoleName
 * @property Shapes\ServerlessV2ScalingConfiguration $ServerlessV2ScalingConfiguration
 * @property string $NetworkType
 * @property bool $ManageMasterUserPassword
 * @property string $MasterUserSecretKmsKeyId
 * @property string $StorageType
 * @property string $EngineLifecycleSupport
 */
class RestoreDBClusterFromS3Request extends Request
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>,
     *     BackupRetentionPeriod?: int,
     *     CharacterSetName?: string,
     *     DatabaseName?: string,
     *     DBClusterIdentifier: string,
     *     DBClusterParameterGroupName?: string,
     *     VpcSecurityGroupIds?: list<string>,
     *     DBSubnetGroupName?: string,
     *     Engine: string,
     *     EngineVersion?: string,
     *     Port?: int,
     *     MasterUsername: string,
     *     MasterUserPassword?: string,
     *     OptionGroupName?: string,
     *     PreferredBackupWindow?: string,
     *     PreferredMaintenanceWindow?: string,
     *     Tags?: list<Shapes\Tag>,
     *     StorageEncrypted?: bool,
     *     KmsKeyId?: string,
     *     EnableIAMDatabaseAuthentication?: bool,
     *     SourceEngine: string,
     *     SourceEngineVersion: string,
     *     S3BucketName: string,
     *     S3Prefix?: string,
     *     S3IngestionRoleArn: string,
     *     BacktrackWindow?: int,
     *     EnableCloudwatchLogsExports?: list<string>,
     *     DeletionProtection?: bool,
     *     CopyTagsToSnapshot?: bool,
     *     Domain?: string,
     *     DomainIAMRoleName?: string,
     *     ServerlessV2ScalingConfiguration?: Shapes\ServerlessV2ScalingConfiguration,
     *     NetworkType?: string,
     *     ManageMasterUserPassword?: bool,
     *     MasterUserSecretKmsKeyId?: string,
     *     StorageType?: string,
     *     EngineLifecycleSupport?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
