<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBInstanceFromS3;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBName
 * @property string $DBInstanceIdentifier
 * @property int $AllocatedStorage
 * @property string $DBInstanceClass
 * @property string $Engine
 * @property string $MasterUsername
 * @property string $MasterUserPassword
 * @property list<string> $DBSecurityGroups
 * @property list<string> $VpcSecurityGroupIds
 * @property string $AvailabilityZone
 * @property string $DBSubnetGroupName
 * @property string $PreferredMaintenanceWindow
 * @property string $DBParameterGroupName
 * @property int $BackupRetentionPeriod
 * @property string $PreferredBackupWindow
 * @property int $Port
 * @property bool $MultiAZ
 * @property string $EngineVersion
 * @property bool $AutoMinorVersionUpgrade
 * @property string $LicenseModel
 * @property int $Iops
 * @property string $OptionGroupName
 * @property bool $PubliclyAccessible
 * @property list<Shapes\Tag> $Tags
 * @property string $StorageType
 * @property bool $StorageEncrypted
 * @property string $KmsKeyId
 * @property bool $CopyTagsToSnapshot
 * @property int $MonitoringInterval
 * @property string $MonitoringRoleArn
 * @property bool $EnableIAMDatabaseAuthentication
 * @property string $SourceEngine
 * @property string $SourceEngineVersion
 * @property string $S3BucketName
 * @property string $S3Prefix
 * @property string $S3IngestionRoleArn
 * @property 'standard'|'advanced' $DatabaseInsightsMode
 * @property bool $EnablePerformanceInsights
 * @property string $PerformanceInsightsKMSKeyId
 * @property int $PerformanceInsightsRetentionPeriod
 * @property list<string> $EnableCloudwatchLogsExports
 * @property list<Shapes\ProcessorFeature> $ProcessorFeatures
 * @property bool $UseDefaultProcessorFeatures
 * @property bool $DeletionProtection
 * @property int $MaxAllocatedStorage
 * @property string $NetworkType
 * @property int $StorageThroughput
 * @property bool $ManageMasterUserPassword
 * @property string $MasterUserSecretKmsKeyId
 * @property bool $DedicatedLogVolume
 * @property string $CACertificateIdentifier
 * @property string $EngineLifecycleSupport
 */
class RestoreDBInstanceFromS3Request extends Request
{
    /**
     * @param array{
     *     DBName?: string,
     *     DBInstanceIdentifier: string,
     *     AllocatedStorage?: int,
     *     DBInstanceClass: string,
     *     Engine: string,
     *     MasterUsername?: string,
     *     MasterUserPassword?: string,
     *     DBSecurityGroups?: list<string>,
     *     VpcSecurityGroupIds?: list<string>,
     *     AvailabilityZone?: string,
     *     DBSubnetGroupName?: string,
     *     PreferredMaintenanceWindow?: string,
     *     DBParameterGroupName?: string,
     *     BackupRetentionPeriod?: int,
     *     PreferredBackupWindow?: string,
     *     Port?: int,
     *     MultiAZ?: bool,
     *     EngineVersion?: string,
     *     AutoMinorVersionUpgrade?: bool,
     *     LicenseModel?: string,
     *     Iops?: int,
     *     OptionGroupName?: string,
     *     PubliclyAccessible?: bool,
     *     Tags?: list<Shapes\Tag>,
     *     StorageType?: string,
     *     StorageEncrypted?: bool,
     *     KmsKeyId?: string,
     *     CopyTagsToSnapshot?: bool,
     *     MonitoringInterval?: int,
     *     MonitoringRoleArn?: string,
     *     EnableIAMDatabaseAuthentication?: bool,
     *     SourceEngine: string,
     *     SourceEngineVersion: string,
     *     S3BucketName: string,
     *     S3Prefix?: string,
     *     S3IngestionRoleArn: string,
     *     DatabaseInsightsMode?: 'standard'|'advanced',
     *     EnablePerformanceInsights?: bool,
     *     PerformanceInsightsKMSKeyId?: string,
     *     PerformanceInsightsRetentionPeriod?: int,
     *     EnableCloudwatchLogsExports?: list<string>,
     *     ProcessorFeatures?: list<Shapes\ProcessorFeature>,
     *     UseDefaultProcessorFeatures?: bool,
     *     DeletionProtection?: bool,
     *     MaxAllocatedStorage?: int,
     *     NetworkType?: string,
     *     StorageThroughput?: int,
     *     ManageMasterUserPassword?: bool,
     *     MasterUserSecretKmsKeyId?: string,
     *     DedicatedLogVolume?: bool,
     *     CACertificateIdentifier?: string,
     *     EngineLifecycleSupport?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
