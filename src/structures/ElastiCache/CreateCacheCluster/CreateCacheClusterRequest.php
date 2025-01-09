<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateCacheCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheClusterId
 * @property string $ReplicationGroupId
 * @property 'single-az'|'cross-az' $AZMode
 * @property string $PreferredAvailabilityZone
 * @property list<string> $PreferredAvailabilityZones
 * @property int $NumCacheNodes
 * @property string $CacheNodeType
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $CacheParameterGroupName
 * @property string $CacheSubnetGroupName
 * @property list<string> $CacheSecurityGroupNames
 * @property list<string> $SecurityGroupIds
 * @property list<Shapes\Tag> $Tags
 * @property list<string> $SnapshotArns
 * @property string $SnapshotName
 * @property string $PreferredMaintenanceWindow
 * @property int $Port
 * @property string $NotificationTopicArn
 * @property bool $AutoMinorVersionUpgrade
 * @property int $SnapshotRetentionLimit
 * @property string $SnapshotWindow
 * @property string $AuthToken
 * @property 'single-outpost'|'cross-outpost' $OutpostMode
 * @property string $PreferredOutpostArn
 * @property list<string> $PreferredOutpostArns
 * @property list<Shapes\LogDeliveryConfigurationRequest> $LogDeliveryConfigurations
 * @property bool $TransitEncryptionEnabled
 * @property 'ipv4'|'ipv6'|'dual_stack' $NetworkType
 * @property 'ipv4'|'ipv6' $IpDiscovery
 */
class CreateCacheClusterRequest extends Request
{
    /**
     * @param array{
     *     CacheClusterId: string,
     *     ReplicationGroupId?: string,
     *     AZMode?: 'single-az'|'cross-az',
     *     PreferredAvailabilityZone?: string,
     *     PreferredAvailabilityZones?: list<string>,
     *     NumCacheNodes?: int,
     *     CacheNodeType?: string,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     CacheParameterGroupName?: string,
     *     CacheSubnetGroupName?: string,
     *     CacheSecurityGroupNames?: list<string>,
     *     SecurityGroupIds?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     SnapshotArns?: list<string>,
     *     SnapshotName?: string,
     *     PreferredMaintenanceWindow?: string,
     *     Port?: int,
     *     NotificationTopicArn?: string,
     *     AutoMinorVersionUpgrade?: bool,
     *     SnapshotRetentionLimit?: int,
     *     SnapshotWindow?: string,
     *     AuthToken?: string,
     *     OutpostMode?: 'single-outpost'|'cross-outpost',
     *     PreferredOutpostArn?: string,
     *     PreferredOutpostArns?: list<string>,
     *     LogDeliveryConfigurations?: list<Shapes\LogDeliveryConfigurationRequest>,
     *     TransitEncryptionEnabled?: bool,
     *     NetworkType?: 'ipv4'|'ipv6'|'dual_stack',
     *     IpDiscovery?: 'ipv4'|'ipv6'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
