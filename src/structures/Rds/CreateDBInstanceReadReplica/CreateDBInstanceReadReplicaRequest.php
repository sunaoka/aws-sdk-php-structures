<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBInstanceReadReplica;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string $SourceDBInstanceIdentifier
 * @property string $DBInstanceClass
 * @property string $AvailabilityZone
 * @property int $Port
 * @property bool $MultiAZ
 * @property bool $AutoMinorVersionUpgrade
 * @property int $Iops
 * @property string $OptionGroupName
 * @property string $DBParameterGroupName
 * @property bool $PubliclyAccessible
 * @property list<Shapes\Tag> $Tags
 * @property string $DBSubnetGroupName
 * @property list<string> $VpcSecurityGroupIds
 * @property string $StorageType
 * @property bool $CopyTagsToSnapshot
 * @property int $MonitoringInterval
 * @property string $MonitoringRoleArn
 * @property string $KmsKeyId
 * @property string $PreSignedUrl
 * @property string $DestinationRegion
 * @property bool $EnableIAMDatabaseAuthentication
 * @property 'standard'|'advanced' $DatabaseInsightsMode
 * @property bool $EnablePerformanceInsights
 * @property string $PerformanceInsightsKMSKeyId
 * @property int $PerformanceInsightsRetentionPeriod
 * @property list<string> $EnableCloudwatchLogsExports
 * @property list<Shapes\ProcessorFeature> $ProcessorFeatures
 * @property bool $UseDefaultProcessorFeatures
 * @property bool $DeletionProtection
 * @property string $Domain
 * @property string $DomainIAMRoleName
 * @property string $DomainFqdn
 * @property string $DomainOu
 * @property string $DomainAuthSecretArn
 * @property list<string> $DomainDnsIps
 * @property 'open-read-only'|'mounted' $ReplicaMode
 * @property int $MaxAllocatedStorage
 * @property string $CustomIamInstanceProfile
 * @property string $NetworkType
 * @property int $StorageThroughput
 * @property bool $EnableCustomerOwnedIp
 * @property int $AllocatedStorage
 * @property string $SourceDBClusterIdentifier
 * @property bool $DedicatedLogVolume
 * @property bool $UpgradeStorageConfig
 * @property string $CACertificateIdentifier
 */
class CreateDBInstanceReadReplicaRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     SourceDBInstanceIdentifier?: string,
     *     DBInstanceClass?: string,
     *     AvailabilityZone?: string,
     *     Port?: int,
     *     MultiAZ?: bool,
     *     AutoMinorVersionUpgrade?: bool,
     *     Iops?: int,
     *     OptionGroupName?: string,
     *     DBParameterGroupName?: string,
     *     PubliclyAccessible?: bool,
     *     Tags?: list<Shapes\Tag>,
     *     DBSubnetGroupName?: string,
     *     VpcSecurityGroupIds?: list<string>,
     *     StorageType?: string,
     *     CopyTagsToSnapshot?: bool,
     *     MonitoringInterval?: int,
     *     MonitoringRoleArn?: string,
     *     KmsKeyId?: string,
     *     PreSignedUrl?: string,
     *     DestinationRegion?: string,
     *     EnableIAMDatabaseAuthentication?: bool,
     *     DatabaseInsightsMode?: 'standard'|'advanced',
     *     EnablePerformanceInsights?: bool,
     *     PerformanceInsightsKMSKeyId?: string,
     *     PerformanceInsightsRetentionPeriod?: int,
     *     EnableCloudwatchLogsExports?: list<string>,
     *     ProcessorFeatures?: list<Shapes\ProcessorFeature>,
     *     UseDefaultProcessorFeatures?: bool,
     *     DeletionProtection?: bool,
     *     Domain?: string,
     *     DomainIAMRoleName?: string,
     *     DomainFqdn?: string,
     *     DomainOu?: string,
     *     DomainAuthSecretArn?: string,
     *     DomainDnsIps?: list<string>,
     *     ReplicaMode?: 'open-read-only'|'mounted',
     *     MaxAllocatedStorage?: int,
     *     CustomIamInstanceProfile?: string,
     *     NetworkType?: string,
     *     StorageThroughput?: int,
     *     EnableCustomerOwnedIp?: bool,
     *     AllocatedStorage?: int,
     *     SourceDBClusterIdentifier?: string,
     *     DedicatedLogVolume?: bool,
     *     UpgradeStorageConfig?: bool,
     *     CACertificateIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
