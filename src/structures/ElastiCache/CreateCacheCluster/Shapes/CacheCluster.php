<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateCacheCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CacheClusterId
 * @property Endpoint|null $ConfigurationEndpoint
 * @property string|null $ClientDownloadLandingPage
 * @property string|null $CacheNodeType
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $CacheClusterStatus
 * @property int|null $NumCacheNodes
 * @property string|null $PreferredAvailabilityZone
 * @property string|null $PreferredOutpostArn
 * @property \Aws\Api\DateTimeResult|null $CacheClusterCreateTime
 * @property string|null $PreferredMaintenanceWindow
 * @property PendingModifiedValues|null $PendingModifiedValues
 * @property NotificationConfiguration|null $NotificationConfiguration
 * @property list<CacheSecurityGroupMembership>|null $CacheSecurityGroups
 * @property CacheParameterGroupStatus|null $CacheParameterGroup
 * @property string|null $CacheSubnetGroupName
 * @property list<CacheNode>|null $CacheNodes
 * @property bool|null $AutoMinorVersionUpgrade
 * @property list<SecurityGroupMembership>|null $SecurityGroups
 * @property string|null $ReplicationGroupId
 * @property int|null $SnapshotRetentionLimit
 * @property string|null $SnapshotWindow
 * @property bool|null $AuthTokenEnabled
 * @property \Aws\Api\DateTimeResult|null $AuthTokenLastModifiedDate
 * @property bool|null $TransitEncryptionEnabled
 * @property bool|null $AtRestEncryptionEnabled
 * @property string|null $ARN
 * @property bool|null $ReplicationGroupLogDeliveryEnabled
 * @property list<LogDeliveryConfiguration>|null $LogDeliveryConfigurations
 * @property 'ipv4'|'ipv6'|'dual_stack'|null $NetworkType
 * @property 'ipv4'|'ipv6'|null $IpDiscovery
 * @property 'preferred'|'required'|null $TransitEncryptionMode
 */
class CacheCluster extends Shape
{
    /**
     * @param array{
     *     CacheClusterId?: string|null,
     *     ConfigurationEndpoint?: Endpoint|null,
     *     ClientDownloadLandingPage?: string|null,
     *     CacheNodeType?: string|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     CacheClusterStatus?: string|null,
     *     NumCacheNodes?: int|null,
     *     PreferredAvailabilityZone?: string|null,
     *     PreferredOutpostArn?: string|null,
     *     CacheClusterCreateTime?: \Aws\Api\DateTimeResult|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     PendingModifiedValues?: PendingModifiedValues|null,
     *     NotificationConfiguration?: NotificationConfiguration|null,
     *     CacheSecurityGroups?: list<CacheSecurityGroupMembership>|null,
     *     CacheParameterGroup?: CacheParameterGroupStatus|null,
     *     CacheSubnetGroupName?: string|null,
     *     CacheNodes?: list<CacheNode>|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     SecurityGroups?: list<SecurityGroupMembership>|null,
     *     ReplicationGroupId?: string|null,
     *     SnapshotRetentionLimit?: int|null,
     *     SnapshotWindow?: string|null,
     *     AuthTokenEnabled?: bool|null,
     *     AuthTokenLastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     TransitEncryptionEnabled?: bool|null,
     *     AtRestEncryptionEnabled?: bool|null,
     *     ARN?: string|null,
     *     ReplicationGroupLogDeliveryEnabled?: bool|null,
     *     LogDeliveryConfigurations?: list<LogDeliveryConfiguration>|null,
     *     NetworkType?: 'ipv4'|'ipv6'|'dual_stack'|null,
     *     IpDiscovery?: 'ipv4'|'ipv6'|null,
     *     TransitEncryptionMode?: 'preferred'|'required'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
