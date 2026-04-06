<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBInstanceFromS3;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DBName
 * @property string $DBInstanceIdentifier
 * @property int|null $AllocatedStorage
 * @property string $DBInstanceClass
 * @property string $Engine
 * @property string|null $MasterUsername
 * @property string|null $MasterUserPassword
 * @property list<string>|null $DBSecurityGroups
 * @property list<string>|null $VpcSecurityGroupIds
 * @property string|null $AvailabilityZone
 * @property string|null $DBSubnetGroupName
 * @property string|null $PreferredMaintenanceWindow
 * @property string|null $DBParameterGroupName
 * @property int|null $BackupRetentionPeriod
 * @property string|null $PreferredBackupWindow
 * @property int|null $Port
 * @property bool|null $MultiAZ
 * @property string|null $EngineVersion
 * @property bool|null $AutoMinorVersionUpgrade
 * @property string|null $LicenseModel
 * @property int|null $Iops
 * @property string|null $OptionGroupName
 * @property bool|null $PubliclyAccessible
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $StorageType
 * @property bool|null $StorageEncrypted
 * @property string|null $KmsKeyId
 * @property bool|null $CopyTagsToSnapshot
 * @property int|null $MonitoringInterval
 * @property string|null $MonitoringRoleArn
 * @property bool|null $EnableIAMDatabaseAuthentication
 * @property string $SourceEngine
 * @property string $SourceEngineVersion
 * @property string $S3BucketName
 * @property string|null $S3Prefix
 * @property string $S3IngestionRoleArn
 * @property 'standard'|'advanced'|null $DatabaseInsightsMode
 * @property bool|null $EnablePerformanceInsights
 * @property string|null $PerformanceInsightsKMSKeyId
 * @property int|null $PerformanceInsightsRetentionPeriod
 * @property list<string>|null $EnableCloudwatchLogsExports
 * @property list<Shapes\ProcessorFeature>|null $ProcessorFeatures
 * @property bool|null $UseDefaultProcessorFeatures
 * @property bool|null $DeletionProtection
 * @property int|null $MaxAllocatedStorage
 * @property string|null $NetworkType
 * @property int|null $StorageThroughput
 * @property bool|null $ManageMasterUserPassword
 * @property string|null $MasterUserSecretKmsKeyId
 * @property bool|null $DedicatedLogVolume
 * @property string|null $CACertificateIdentifier
 * @property string|null $EngineLifecycleSupport
 */
class RestoreDBInstanceFromS3Request extends Request
{
    /**
     * @param array{
     *     DBName?: string|null,
     *     DBInstanceIdentifier: string,
     *     AllocatedStorage?: int|null,
     *     DBInstanceClass: string,
     *     Engine: string,
     *     MasterUsername?: string|null,
     *     MasterUserPassword?: string|null,
     *     DBSecurityGroups?: list<string>|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     AvailabilityZone?: string|null,
     *     DBSubnetGroupName?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     DBParameterGroupName?: string|null,
     *     BackupRetentionPeriod?: int|null,
     *     PreferredBackupWindow?: string|null,
     *     Port?: int|null,
     *     MultiAZ?: bool|null,
     *     EngineVersion?: string|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     LicenseModel?: string|null,
     *     Iops?: int|null,
     *     OptionGroupName?: string|null,
     *     PubliclyAccessible?: bool|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     StorageType?: string|null,
     *     StorageEncrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     MonitoringInterval?: int|null,
     *     MonitoringRoleArn?: string|null,
     *     EnableIAMDatabaseAuthentication?: bool|null,
     *     SourceEngine: string,
     *     SourceEngineVersion: string,
     *     S3BucketName: string,
     *     S3Prefix?: string|null,
     *     S3IngestionRoleArn: string,
     *     DatabaseInsightsMode?: 'standard'|'advanced'|null,
     *     EnablePerformanceInsights?: bool|null,
     *     PerformanceInsightsKMSKeyId?: string|null,
     *     PerformanceInsightsRetentionPeriod?: int|null,
     *     EnableCloudwatchLogsExports?: list<string>|null,
     *     ProcessorFeatures?: list<Shapes\ProcessorFeature>|null,
     *     UseDefaultProcessorFeatures?: bool|null,
     *     DeletionProtection?: bool|null,
     *     MaxAllocatedStorage?: int|null,
     *     NetworkType?: string|null,
     *     StorageThroughput?: int|null,
     *     ManageMasterUserPassword?: bool|null,
     *     MasterUserSecretKmsKeyId?: string|null,
     *     DedicatedLogVolume?: bool|null,
     *     CACertificateIdentifier?: string|null,
     *     EngineLifecycleSupport?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
