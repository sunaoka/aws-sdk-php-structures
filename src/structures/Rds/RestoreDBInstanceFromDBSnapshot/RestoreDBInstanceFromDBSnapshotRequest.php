<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBInstanceFromDBSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string $DBSnapshotIdentifier
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
 * @property list<Shapes\Tag> $Tags
 * @property string $StorageType
 * @property string $TdeCredentialArn
 * @property string $TdeCredentialPassword
 * @property list<string> $VpcSecurityGroupIds
 * @property string $Domain
 * @property string $DomainFqdn
 * @property string $DomainOu
 * @property string $DomainAuthSecretArn
 * @property list<string> $DomainDnsIps
 * @property bool $CopyTagsToSnapshot
 * @property string $DomainIAMRoleName
 * @property bool $EnableIAMDatabaseAuthentication
 * @property list<string> $EnableCloudwatchLogsExports
 * @property list<Shapes\ProcessorFeature> $ProcessorFeatures
 * @property bool $UseDefaultProcessorFeatures
 * @property string $DBParameterGroupName
 * @property bool $DeletionProtection
 * @property bool $EnableCustomerOwnedIp
 * @property string $CustomIamInstanceProfile
 * @property string $BackupTarget
 * @property string $NetworkType
 * @property int $StorageThroughput
 * @property string $DBClusterSnapshotIdentifier
 * @property int $AllocatedStorage
 * @property bool $DedicatedLogVolume
 * @property string $CACertificateIdentifier
 * @property string $EngineLifecycleSupport
 */
class RestoreDBInstanceFromDBSnapshotRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     DBSnapshotIdentifier?: string,
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
     *     Tags?: list<Shapes\Tag>,
     *     StorageType?: string,
     *     TdeCredentialArn?: string,
     *     TdeCredentialPassword?: string,
     *     VpcSecurityGroupIds?: list<string>,
     *     Domain?: string,
     *     DomainFqdn?: string,
     *     DomainOu?: string,
     *     DomainAuthSecretArn?: string,
     *     DomainDnsIps?: list<string>,
     *     CopyTagsToSnapshot?: bool,
     *     DomainIAMRoleName?: string,
     *     EnableIAMDatabaseAuthentication?: bool,
     *     EnableCloudwatchLogsExports?: list<string>,
     *     ProcessorFeatures?: list<Shapes\ProcessorFeature>,
     *     UseDefaultProcessorFeatures?: bool,
     *     DBParameterGroupName?: string,
     *     DeletionProtection?: bool,
     *     EnableCustomerOwnedIp?: bool,
     *     CustomIamInstanceProfile?: string,
     *     BackupTarget?: string,
     *     NetworkType?: string,
     *     StorageThroughput?: int,
     *     DBClusterSnapshotIdentifier?: string,
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
