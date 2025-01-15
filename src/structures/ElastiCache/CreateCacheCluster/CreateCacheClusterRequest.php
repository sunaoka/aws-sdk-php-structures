<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateCacheCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheClusterId
 * @property string|null $ReplicationGroupId
 * @property 'single-az'|'cross-az'|null $AZMode
 * @property string|null $PreferredAvailabilityZone
 * @property list<string>|null $PreferredAvailabilityZones
 * @property int|null $NumCacheNodes
 * @property string|null $CacheNodeType
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $CacheParameterGroupName
 * @property string|null $CacheSubnetGroupName
 * @property list<string>|null $CacheSecurityGroupNames
 * @property list<string>|null $SecurityGroupIds
 * @property list<Shapes\Tag>|null $Tags
 * @property list<string>|null $SnapshotArns
 * @property string|null $SnapshotName
 * @property string|null $PreferredMaintenanceWindow
 * @property int|null $Port
 * @property string|null $NotificationTopicArn
 * @property bool|null $AutoMinorVersionUpgrade
 * @property int|null $SnapshotRetentionLimit
 * @property string|null $SnapshotWindow
 * @property string|null $AuthToken
 * @property 'single-outpost'|'cross-outpost'|null $OutpostMode
 * @property string|null $PreferredOutpostArn
 * @property list<string>|null $PreferredOutpostArns
 * @property list<Shapes\LogDeliveryConfigurationRequest>|null $LogDeliveryConfigurations
 * @property bool|null $TransitEncryptionEnabled
 * @property 'ipv4'|'ipv6'|'dual_stack'|null $NetworkType
 * @property 'ipv4'|'ipv6'|null $IpDiscovery
 */
class CreateCacheClusterRequest extends Request
{
    /**
     * @param array{
     *     CacheClusterId: string,
     *     ReplicationGroupId?: string|null,
     *     AZMode?: 'single-az'|'cross-az'|null,
     *     PreferredAvailabilityZone?: string|null,
     *     PreferredAvailabilityZones?: list<string>|null,
     *     NumCacheNodes?: int|null,
     *     CacheNodeType?: string|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     CacheParameterGroupName?: string|null,
     *     CacheSubnetGroupName?: string|null,
     *     CacheSecurityGroupNames?: list<string>|null,
     *     SecurityGroupIds?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     SnapshotArns?: list<string>|null,
     *     SnapshotName?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     Port?: int|null,
     *     NotificationTopicArn?: string|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     SnapshotRetentionLimit?: int|null,
     *     SnapshotWindow?: string|null,
     *     AuthToken?: string|null,
     *     OutpostMode?: 'single-outpost'|'cross-outpost'|null,
     *     PreferredOutpostArn?: string|null,
     *     PreferredOutpostArns?: list<string>|null,
     *     LogDeliveryConfigurations?: list<Shapes\LogDeliveryConfigurationRequest>|null,
     *     TransitEncryptionEnabled?: bool|null,
     *     NetworkType?: 'ipv4'|'ipv6'|'dual_stack'|null,
     *     IpDiscovery?: 'ipv4'|'ipv6'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
