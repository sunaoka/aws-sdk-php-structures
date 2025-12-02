<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBInstanceToPointInTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SourceDBInstanceIdentifier
 * @property string $TargetDBInstanceIdentifier
 * @property \Aws\Api\DateTimeResult|null $RestoreTime
 * @property bool|null $UseLatestRestorableTime
 * @property string|null $DBInstanceClass
 * @property int|null $Port
 * @property string|null $AvailabilityZone
 * @property string|null $DBSubnetGroupName
 * @property bool|null $MultiAZ
 * @property bool|null $PubliclyAccessible
 * @property bool|null $AutoMinorVersionUpgrade
 * @property string|null $LicenseModel
 * @property string|null $DBName
 * @property string|null $Engine
 * @property int|null $Iops
 * @property int|null $StorageThroughput
 * @property string|null $OptionGroupName
 * @property bool|null $CopyTagsToSnapshot
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $StorageType
 * @property string|null $TdeCredentialArn
 * @property string|null $TdeCredentialPassword
 * @property list<string>|null $VpcSecurityGroupIds
 * @property string|null $Domain
 * @property string|null $DomainIAMRoleName
 * @property string|null $DomainFqdn
 * @property string|null $DomainOu
 * @property string|null $DomainAuthSecretArn
 * @property list<string>|null $DomainDnsIps
 * @property bool|null $EnableIAMDatabaseAuthentication
 * @property list<string>|null $EnableCloudwatchLogsExports
 * @property list<Shapes\ProcessorFeature>|null $ProcessorFeatures
 * @property bool|null $UseDefaultProcessorFeatures
 * @property string|null $DBParameterGroupName
 * @property bool|null $DeletionProtection
 * @property string|null $SourceDbiResourceId
 * @property int|null $MaxAllocatedStorage
 * @property bool|null $EnableCustomerOwnedIp
 * @property string|null $NetworkType
 * @property string|null $SourceDBInstanceAutomatedBackupsArn
 * @property string|null $BackupTarget
 * @property string|null $CustomIamInstanceProfile
 * @property int|null $AllocatedStorage
 * @property bool|null $DedicatedLogVolume
 * @property string|null $CACertificateIdentifier
 * @property string|null $EngineLifecycleSupport
 * @property bool|null $ManageMasterUserPassword
 * @property string|null $MasterUserSecretKmsKeyId
 * @property list<Shapes\AdditionalStorageVolume>|null $AdditionalStorageVolumes
 */
class RestoreDBInstanceToPointInTimeRequest extends Request
{
    /**
     * @param array{
     *     SourceDBInstanceIdentifier?: string|null,
     *     TargetDBInstanceIdentifier: string,
     *     RestoreTime?: \Aws\Api\DateTimeResult|null,
     *     UseLatestRestorableTime?: bool|null,
     *     DBInstanceClass?: string|null,
     *     Port?: int|null,
     *     AvailabilityZone?: string|null,
     *     DBSubnetGroupName?: string|null,
     *     MultiAZ?: bool|null,
     *     PubliclyAccessible?: bool|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     LicenseModel?: string|null,
     *     DBName?: string|null,
     *     Engine?: string|null,
     *     Iops?: int|null,
     *     StorageThroughput?: int|null,
     *     OptionGroupName?: string|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     StorageType?: string|null,
     *     TdeCredentialArn?: string|null,
     *     TdeCredentialPassword?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     Domain?: string|null,
     *     DomainIAMRoleName?: string|null,
     *     DomainFqdn?: string|null,
     *     DomainOu?: string|null,
     *     DomainAuthSecretArn?: string|null,
     *     DomainDnsIps?: list<string>|null,
     *     EnableIAMDatabaseAuthentication?: bool|null,
     *     EnableCloudwatchLogsExports?: list<string>|null,
     *     ProcessorFeatures?: list<Shapes\ProcessorFeature>|null,
     *     UseDefaultProcessorFeatures?: bool|null,
     *     DBParameterGroupName?: string|null,
     *     DeletionProtection?: bool|null,
     *     SourceDbiResourceId?: string|null,
     *     MaxAllocatedStorage?: int|null,
     *     EnableCustomerOwnedIp?: bool|null,
     *     NetworkType?: string|null,
     *     SourceDBInstanceAutomatedBackupsArn?: string|null,
     *     BackupTarget?: string|null,
     *     CustomIamInstanceProfile?: string|null,
     *     AllocatedStorage?: int|null,
     *     DedicatedLogVolume?: bool|null,
     *     CACertificateIdentifier?: string|null,
     *     EngineLifecycleSupport?: string|null,
     *     ManageMasterUserPassword?: bool|null,
     *     MasterUserSecretKmsKeyId?: string|null,
     *     AdditionalStorageVolumes?: list<Shapes\AdditionalStorageVolume>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
