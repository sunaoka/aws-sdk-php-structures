<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBInstanceToPointInTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceDBInstanceIdentifier
 * @property string $TargetDBInstanceIdentifier
 * @property \Aws\Api\DateTimeResult $RestoreTime
 * @property bool $UseLatestRestorableTime
 * @property string $DBInstanceClass
 * @property int $Port
 * @property string $AvailabilityZone
 * @property string $DBSubnetGroupName
 * @property bool $MultiAZ
 * @property bool $PubliclyAccessible
 * @property bool $AutoMinorVersionUpgrade
 * @property string $LicenseModel
 * @property string $DBName
 * @property string $Engine
 * @property int $Iops
 * @property string $OptionGroupName
 * @property bool $CopyTagsToSnapshot
 * @property list<Shapes\Tag> $Tags
 * @property string $StorageType
 * @property string $TdeCredentialArn
 * @property string $TdeCredentialPassword
 * @property list<string> $VpcSecurityGroupIds
 * @property string $Domain
 * @property string $DomainIAMRoleName
 * @property string $DomainFqdn
 * @property string $DomainOu
 * @property string $DomainAuthSecretArn
 * @property list<string> $DomainDnsIps
 * @property bool $EnableIAMDatabaseAuthentication
 * @property list<string> $EnableCloudwatchLogsExports
 * @property list<Shapes\ProcessorFeature> $ProcessorFeatures
 * @property bool $UseDefaultProcessorFeatures
 * @property string $DBParameterGroupName
 * @property bool $DeletionProtection
 * @property string $SourceDbiResourceId
 * @property int $MaxAllocatedStorage
 * @property string $SourceDBInstanceAutomatedBackupsArn
 * @property bool $EnableCustomerOwnedIp
 * @property string $CustomIamInstanceProfile
 * @property string $BackupTarget
 * @property string $NetworkType
 * @property int $StorageThroughput
 * @property int $AllocatedStorage
 * @property bool $DedicatedLogVolume
 * @property string $CACertificateIdentifier
 * @property string $EngineLifecycleSupport
 */
class RestoreDBInstanceToPointInTimeRequest extends Request
{
    /**
     * @param array{
     *     SourceDBInstanceIdentifier?: string,
     *     TargetDBInstanceIdentifier: string,
     *     RestoreTime?: \Aws\Api\DateTimeResult,
     *     UseLatestRestorableTime?: bool,
     *     DBInstanceClass?: string,
     *     Port?: int,
     *     AvailabilityZone?: string,
     *     DBSubnetGroupName?: string,
     *     MultiAZ?: bool,
     *     PubliclyAccessible?: bool,
     *     AutoMinorVersionUpgrade?: bool,
     *     LicenseModel?: string,
     *     DBName?: string,
     *     Engine?: string,
     *     Iops?: int,
     *     OptionGroupName?: string,
     *     CopyTagsToSnapshot?: bool,
     *     Tags?: list<Shapes\Tag>,
     *     StorageType?: string,
     *     TdeCredentialArn?: string,
     *     TdeCredentialPassword?: string,
     *     VpcSecurityGroupIds?: list<string>,
     *     Domain?: string,
     *     DomainIAMRoleName?: string,
     *     DomainFqdn?: string,
     *     DomainOu?: string,
     *     DomainAuthSecretArn?: string,
     *     DomainDnsIps?: list<string>,
     *     EnableIAMDatabaseAuthentication?: bool,
     *     EnableCloudwatchLogsExports?: list<string>,
     *     ProcessorFeatures?: list<Shapes\ProcessorFeature>,
     *     UseDefaultProcessorFeatures?: bool,
     *     DBParameterGroupName?: string,
     *     DeletionProtection?: bool,
     *     SourceDbiResourceId?: string,
     *     MaxAllocatedStorage?: int,
     *     SourceDBInstanceAutomatedBackupsArn?: string,
     *     EnableCustomerOwnedIp?: bool,
     *     CustomIamInstanceProfile?: string,
     *     BackupTarget?: string,
     *     NetworkType?: string,
     *     StorageThroughput?: int,
     *     AllocatedStorage?: int,
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
