<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyCacheCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheClusterId
 * @property int $NumCacheNodes
 * @property list<string> $CacheNodeIdsToRemove
 * @property 'single-az'|'cross-az' $AZMode
 * @property list<string> $NewAvailabilityZones
 * @property list<string> $CacheSecurityGroupNames
 * @property list<string> $SecurityGroupIds
 * @property string $PreferredMaintenanceWindow
 * @property string $NotificationTopicArn
 * @property string $CacheParameterGroupName
 * @property string $NotificationTopicStatus
 * @property bool $ApplyImmediately
 * @property string $Engine
 * @property string $EngineVersion
 * @property bool $AutoMinorVersionUpgrade
 * @property int $SnapshotRetentionLimit
 * @property string $SnapshotWindow
 * @property string $CacheNodeType
 * @property string $AuthToken
 * @property 'SET'|'ROTATE'|'DELETE' $AuthTokenUpdateStrategy
 * @property list<Shapes\LogDeliveryConfigurationRequest> $LogDeliveryConfigurations
 * @property 'ipv4'|'ipv6' $IpDiscovery
 */
class ModifyCacheClusterRequest extends Request
{
    /**
     * @param array{
     *     CacheClusterId: string,
     *     NumCacheNodes?: int,
     *     CacheNodeIdsToRemove?: list<string>,
     *     AZMode?: 'single-az'|'cross-az',
     *     NewAvailabilityZones?: list<string>,
     *     CacheSecurityGroupNames?: list<string>,
     *     SecurityGroupIds?: list<string>,
     *     PreferredMaintenanceWindow?: string,
     *     NotificationTopicArn?: string,
     *     CacheParameterGroupName?: string,
     *     NotificationTopicStatus?: string,
     *     ApplyImmediately?: bool,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     AutoMinorVersionUpgrade?: bool,
     *     SnapshotRetentionLimit?: int,
     *     SnapshotWindow?: string,
     *     CacheNodeType?: string,
     *     AuthToken?: string,
     *     AuthTokenUpdateStrategy?: 'SET'|'ROTATE'|'DELETE',
     *     LogDeliveryConfigurations?: list<Shapes\LogDeliveryConfigurationRequest>,
     *     IpDiscovery?: 'ipv4'|'ipv6'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
