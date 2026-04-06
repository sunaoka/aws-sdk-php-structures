<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyCacheCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheClusterId
 * @property int|null $NumCacheNodes
 * @property list<string>|null $CacheNodeIdsToRemove
 * @property 'single-az'|'cross-az'|null $AZMode
 * @property list<string>|null $NewAvailabilityZones
 * @property list<string>|null $CacheSecurityGroupNames
 * @property list<string>|null $SecurityGroupIds
 * @property string|null $PreferredMaintenanceWindow
 * @property string|null $NotificationTopicArn
 * @property string|null $CacheParameterGroupName
 * @property string|null $NotificationTopicStatus
 * @property bool|null $ApplyImmediately
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property bool|null $AutoMinorVersionUpgrade
 * @property int|null $SnapshotRetentionLimit
 * @property string|null $SnapshotWindow
 * @property string|null $CacheNodeType
 * @property string|null $AuthToken
 * @property 'SET'|'ROTATE'|'DELETE'|null $AuthTokenUpdateStrategy
 * @property list<Shapes\LogDeliveryConfigurationRequest>|null $LogDeliveryConfigurations
 * @property 'ipv4'|'ipv6'|null $IpDiscovery
 */
class ModifyCacheClusterRequest extends Request
{
    /**
     * @param array{
     *     CacheClusterId: string,
     *     NumCacheNodes?: int|null,
     *     CacheNodeIdsToRemove?: list<string>|null,
     *     AZMode?: 'single-az'|'cross-az'|null,
     *     NewAvailabilityZones?: list<string>|null,
     *     CacheSecurityGroupNames?: list<string>|null,
     *     SecurityGroupIds?: list<string>|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     NotificationTopicArn?: string|null,
     *     CacheParameterGroupName?: string|null,
     *     NotificationTopicStatus?: string|null,
     *     ApplyImmediately?: bool|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     SnapshotRetentionLimit?: int|null,
     *     SnapshotWindow?: string|null,
     *     CacheNodeType?: string|null,
     *     AuthToken?: string|null,
     *     AuthTokenUpdateStrategy?: 'SET'|'ROTATE'|'DELETE'|null,
     *     LogDeliveryConfigurations?: list<Shapes\LogDeliveryConfigurationRequest>|null,
     *     IpDiscovery?: 'ipv4'|'ipv6'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
