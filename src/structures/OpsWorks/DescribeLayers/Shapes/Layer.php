<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeLayers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $StackId
 * @property string|null $LayerId
 * @property 'aws-flow-ruby'|'ecs-cluster'|'java-app'|'lb'|'web'|'php-app'|'rails-app'|'nodejs-app'|'memcached'|'db-master'|'monitoring-master'|'custom'|null $Type
 * @property string|null $Name
 * @property string|null $Shortname
 * @property array<'EcsClusterArn'|'EnableHaproxyStats'|'HaproxyStatsUrl'|'HaproxyStatsUser'|'HaproxyStatsPassword'|'HaproxyHealthCheckUrl'|'HaproxyHealthCheckMethod'|'MysqlRootPassword'|'MysqlRootPasswordUbiquitous'|'GangliaUrl'|'GangliaUser'|'GangliaPassword'|'MemcachedMemory'|'NodejsVersion'|'RubyVersion'|'RubygemsVersion'|'ManageBundler'|'BundlerVersion'|'RailsStack'|'PassengerVersion'|'Jvm'|'JvmVersion'|'JvmOptions'|'JavaAppServer'|'JavaAppServerVersion', string>|null $Attributes
 * @property CloudWatchLogsConfiguration|null $CloudWatchLogsConfiguration
 * @property string|null $CustomInstanceProfileArn
 * @property string|null $CustomJson
 * @property list<string>|null $CustomSecurityGroupIds
 * @property list<string>|null $DefaultSecurityGroupNames
 * @property list<string>|null $Packages
 * @property list<VolumeConfiguration>|null $VolumeConfigurations
 * @property bool|null $EnableAutoHealing
 * @property bool|null $AutoAssignElasticIps
 * @property bool|null $AutoAssignPublicIps
 * @property Recipes|null $DefaultRecipes
 * @property Recipes|null $CustomRecipes
 * @property string|null $CreatedAt
 * @property bool|null $InstallUpdatesOnBoot
 * @property bool|null $UseEbsOptimizedInstances
 * @property LifecycleEventConfiguration|null $LifecycleEventConfiguration
 */
class Layer extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     StackId?: string|null,
     *     LayerId?: string|null,
     *     Type?: 'aws-flow-ruby'|'ecs-cluster'|'java-app'|'lb'|'web'|'php-app'|'rails-app'|'nodejs-app'|'memcached'|'db-master'|'monitoring-master'|'custom'|null,
     *     Name?: string|null,
     *     Shortname?: string|null,
     *     Attributes?: array<'EcsClusterArn'|'EnableHaproxyStats'|'HaproxyStatsUrl'|'HaproxyStatsUser'|'HaproxyStatsPassword'|'HaproxyHealthCheckUrl'|'HaproxyHealthCheckMethod'|'MysqlRootPassword'|'MysqlRootPasswordUbiquitous'|'GangliaUrl'|'GangliaUser'|'GangliaPassword'|'MemcachedMemory'|'NodejsVersion'|'RubyVersion'|'RubygemsVersion'|'ManageBundler'|'BundlerVersion'|'RailsStack'|'PassengerVersion'|'Jvm'|'JvmVersion'|'JvmOptions'|'JavaAppServer'|'JavaAppServerVersion', string>|null,
     *     CloudWatchLogsConfiguration?: CloudWatchLogsConfiguration|null,
     *     CustomInstanceProfileArn?: string|null,
     *     CustomJson?: string|null,
     *     CustomSecurityGroupIds?: list<string>|null,
     *     DefaultSecurityGroupNames?: list<string>|null,
     *     Packages?: list<string>|null,
     *     VolumeConfigurations?: list<VolumeConfiguration>|null,
     *     EnableAutoHealing?: bool|null,
     *     AutoAssignElasticIps?: bool|null,
     *     AutoAssignPublicIps?: bool|null,
     *     DefaultRecipes?: Recipes|null,
     *     CustomRecipes?: Recipes|null,
     *     CreatedAt?: string|null,
     *     InstallUpdatesOnBoot?: bool|null,
     *     UseEbsOptimizedInstances?: bool|null,
     *     LifecycleEventConfiguration?: LifecycleEventConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
