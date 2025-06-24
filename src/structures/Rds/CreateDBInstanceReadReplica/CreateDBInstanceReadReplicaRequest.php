<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBInstanceReadReplica;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string|null $SourceDBInstanceIdentifier
 * @property string|null $DBInstanceClass
 * @property string|null $AvailabilityZone
 * @property int|null $Port
 * @property bool|null $MultiAZ
 * @property bool|null $AutoMinorVersionUpgrade
 * @property int|null $Iops
 * @property string|null $OptionGroupName
 * @property string|null $DBParameterGroupName
 * @property bool|null $PubliclyAccessible
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $DBSubnetGroupName
 * @property list<string>|null $VpcSecurityGroupIds
 * @property string|null $StorageType
 * @property bool|null $CopyTagsToSnapshot
 * @property int|null $MonitoringInterval
 * @property string|null $MonitoringRoleArn
 * @property string|null $KmsKeyId
 * @property string|null $PreSignedUrl
 * @property string|null $DestinationRegion
 * @property bool|null $EnableIAMDatabaseAuthentication
 * @property 'standard'|'advanced'|null $DatabaseInsightsMode
 * @property bool|null $EnablePerformanceInsights
 * @property string|null $PerformanceInsightsKMSKeyId
 * @property int|null $PerformanceInsightsRetentionPeriod
 * @property list<string>|null $EnableCloudwatchLogsExports
 * @property list<Shapes\ProcessorFeature>|null $ProcessorFeatures
 * @property bool|null $UseDefaultProcessorFeatures
 * @property bool|null $DeletionProtection
 * @property string|null $Domain
 * @property string|null $DomainIAMRoleName
 * @property string|null $DomainFqdn
 * @property string|null $DomainOu
 * @property string|null $DomainAuthSecretArn
 * @property list<string>|null $DomainDnsIps
 * @property 'open-read-only'|'mounted'|null $ReplicaMode
 * @property int|null $MaxAllocatedStorage
 * @property string|null $CustomIamInstanceProfile
 * @property string|null $NetworkType
 * @property int|null $StorageThroughput
 * @property bool|null $EnableCustomerOwnedIp
 * @property string|null $BackupTarget
 * @property int|null $AllocatedStorage
 * @property string|null $SourceDBClusterIdentifier
 * @property bool|null $DedicatedLogVolume
 * @property bool|null $UpgradeStorageConfig
 * @property string|null $CACertificateIdentifier
 */
class CreateDBInstanceReadReplicaRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     SourceDBInstanceIdentifier?: string|null,
     *     DBInstanceClass?: string|null,
     *     AvailabilityZone?: string|null,
     *     Port?: int|null,
     *     MultiAZ?: bool|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     Iops?: int|null,
     *     OptionGroupName?: string|null,
     *     DBParameterGroupName?: string|null,
     *     PubliclyAccessible?: bool|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     DBSubnetGroupName?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     StorageType?: string|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     MonitoringInterval?: int|null,
     *     MonitoringRoleArn?: string|null,
     *     KmsKeyId?: string|null,
     *     PreSignedUrl?: string|null,
     *     DestinationRegion?: string|null,
     *     EnableIAMDatabaseAuthentication?: bool|null,
     *     DatabaseInsightsMode?: 'standard'|'advanced'|null,
     *     EnablePerformanceInsights?: bool|null,
     *     PerformanceInsightsKMSKeyId?: string|null,
     *     PerformanceInsightsRetentionPeriod?: int|null,
     *     EnableCloudwatchLogsExports?: list<string>|null,
     *     ProcessorFeatures?: list<Shapes\ProcessorFeature>|null,
     *     UseDefaultProcessorFeatures?: bool|null,
     *     DeletionProtection?: bool|null,
     *     Domain?: string|null,
     *     DomainIAMRoleName?: string|null,
     *     DomainFqdn?: string|null,
     *     DomainOu?: string|null,
     *     DomainAuthSecretArn?: string|null,
     *     DomainDnsIps?: list<string>|null,
     *     ReplicaMode?: 'open-read-only'|'mounted'|null,
     *     MaxAllocatedStorage?: int|null,
     *     CustomIamInstanceProfile?: string|null,
     *     NetworkType?: string|null,
     *     StorageThroughput?: int|null,
     *     EnableCustomerOwnedIp?: bool|null,
     *     BackupTarget?: string|null,
     *     AllocatedStorage?: int|null,
     *     SourceDBClusterIdentifier?: string|null,
     *     DedicatedLogVolume?: bool|null,
     *     UpgradeStorageConfig?: bool|null,
     *     CACertificateIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
