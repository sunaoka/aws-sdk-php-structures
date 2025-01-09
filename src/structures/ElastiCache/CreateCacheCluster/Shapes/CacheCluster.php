<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateCacheCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CacheClusterId
 * @property Endpoint $ConfigurationEndpoint
 * @property string $ClientDownloadLandingPage
 * @property string $CacheNodeType
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $CacheClusterStatus
 * @property int $NumCacheNodes
 * @property string $PreferredAvailabilityZone
 * @property string $PreferredOutpostArn
 * @property \Aws\Api\DateTimeResult $CacheClusterCreateTime
 * @property string $PreferredMaintenanceWindow
 * @property PendingModifiedValues $PendingModifiedValues
 * @property NotificationConfiguration $NotificationConfiguration
 * @property list<CacheSecurityGroupMembership> $CacheSecurityGroups
 * @property CacheParameterGroupStatus $CacheParameterGroup
 * @property string $CacheSubnetGroupName
 * @property list<CacheNode> $CacheNodes
 * @property bool $AutoMinorVersionUpgrade
 * @property list<SecurityGroupMembership> $SecurityGroups
 * @property string $ReplicationGroupId
 * @property int $SnapshotRetentionLimit
 * @property string $SnapshotWindow
 * @property bool $AuthTokenEnabled
 * @property \Aws\Api\DateTimeResult $AuthTokenLastModifiedDate
 * @property bool $TransitEncryptionEnabled
 * @property bool $AtRestEncryptionEnabled
 * @property string $ARN
 * @property bool $ReplicationGroupLogDeliveryEnabled
 * @property list<LogDeliveryConfiguration> $LogDeliveryConfigurations
 * @property 'ipv4'|'ipv6'|'dual_stack' $NetworkType
 * @property 'ipv4'|'ipv6' $IpDiscovery
 * @property 'preferred'|'required' $TransitEncryptionMode
 */
class CacheCluster extends Shape
{
    /**
     * @param array{
     *     CacheClusterId?: string,
     *     ConfigurationEndpoint?: Endpoint,
     *     ClientDownloadLandingPage?: string,
     *     CacheNodeType?: string,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     CacheClusterStatus?: string,
     *     NumCacheNodes?: int,
     *     PreferredAvailabilityZone?: string,
     *     PreferredOutpostArn?: string,
     *     CacheClusterCreateTime?: \Aws\Api\DateTimeResult,
     *     PreferredMaintenanceWindow?: string,
     *     PendingModifiedValues?: PendingModifiedValues,
     *     NotificationConfiguration?: NotificationConfiguration,
     *     CacheSecurityGroups?: list<CacheSecurityGroupMembership>,
     *     CacheParameterGroup?: CacheParameterGroupStatus,
     *     CacheSubnetGroupName?: string,
     *     CacheNodes?: list<CacheNode>,
     *     AutoMinorVersionUpgrade?: bool,
     *     SecurityGroups?: list<SecurityGroupMembership>,
     *     ReplicationGroupId?: string,
     *     SnapshotRetentionLimit?: int,
     *     SnapshotWindow?: string,
     *     AuthTokenEnabled?: bool,
     *     AuthTokenLastModifiedDate?: \Aws\Api\DateTimeResult,
     *     TransitEncryptionEnabled?: bool,
     *     AtRestEncryptionEnabled?: bool,
     *     ARN?: string,
     *     ReplicationGroupLogDeliveryEnabled?: bool,
     *     LogDeliveryConfigurations?: list<LogDeliveryConfiguration>,
     *     NetworkType?: 'ipv4'|'ipv6'|'dual_stack',
     *     IpDiscovery?: 'ipv4'|'ipv6',
     *     TransitEncryptionMode?: 'preferred'|'required'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
