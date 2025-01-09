<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeLayers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $StackId
 * @property string $LayerId
 * @property 'aws-flow-ruby'|'ecs-cluster'|'java-app'|'lb'|'web'|'php-app'|'rails-app'|'nodejs-app'|'memcached'|'db-master'|'monitoring-master'|'custom' $Type
 * @property string $Name
 * @property string $Shortname
 * @property array<'EcsClusterArn'|'EnableHaproxyStats'|'HaproxyStatsUrl'|'HaproxyStatsUser'|'HaproxyStatsPassword'|'HaproxyHealthCheckUrl'|'HaproxyHealthCheckMethod'|'MysqlRootPassword'|'MysqlRootPasswordUbiquitous'|'GangliaUrl'|'GangliaUser'|'GangliaPassword'|'MemcachedMemory'|'NodejsVersion'|'RubyVersion'|'RubygemsVersion'|'ManageBundler'|'BundlerVersion'|'RailsStack'|'PassengerVersion'|'Jvm'|'JvmVersion'|'JvmOptions'|'JavaAppServer'|'JavaAppServerVersion', string> $Attributes
 * @property CloudWatchLogsConfiguration $CloudWatchLogsConfiguration
 * @property string $CustomInstanceProfileArn
 * @property string $CustomJson
 * @property list<string> $CustomSecurityGroupIds
 * @property list<string> $DefaultSecurityGroupNames
 * @property list<string> $Packages
 * @property list<VolumeConfiguration> $VolumeConfigurations
 * @property bool $EnableAutoHealing
 * @property bool $AutoAssignElasticIps
 * @property bool $AutoAssignPublicIps
 * @property Recipes $DefaultRecipes
 * @property Recipes $CustomRecipes
 * @property string $CreatedAt
 * @property bool $InstallUpdatesOnBoot
 * @property bool $UseEbsOptimizedInstances
 * @property LifecycleEventConfiguration $LifecycleEventConfiguration
 */
class Layer extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     StackId?: string,
     *     LayerId?: string,
     *     Type?: 'aws-flow-ruby'|'ecs-cluster'|'java-app'|'lb'|'web'|'php-app'|'rails-app'|'nodejs-app'|'memcached'|'db-master'|'monitoring-master'|'custom',
     *     Name?: string,
     *     Shortname?: string,
     *     Attributes?: array<'EcsClusterArn'|'EnableHaproxyStats'|'HaproxyStatsUrl'|'HaproxyStatsUser'|'HaproxyStatsPassword'|'HaproxyHealthCheckUrl'|'HaproxyHealthCheckMethod'|'MysqlRootPassword'|'MysqlRootPasswordUbiquitous'|'GangliaUrl'|'GangliaUser'|'GangliaPassword'|'MemcachedMemory'|'NodejsVersion'|'RubyVersion'|'RubygemsVersion'|'ManageBundler'|'BundlerVersion'|'RailsStack'|'PassengerVersion'|'Jvm'|'JvmVersion'|'JvmOptions'|'JavaAppServer'|'JavaAppServerVersion', string>,
     *     CloudWatchLogsConfiguration?: CloudWatchLogsConfiguration,
     *     CustomInstanceProfileArn?: string,
     *     CustomJson?: string,
     *     CustomSecurityGroupIds?: list<string>,
     *     DefaultSecurityGroupNames?: list<string>,
     *     Packages?: list<string>,
     *     VolumeConfigurations?: list<VolumeConfiguration>,
     *     EnableAutoHealing?: bool,
     *     AutoAssignElasticIps?: bool,
     *     AutoAssignPublicIps?: bool,
     *     DefaultRecipes?: Recipes,
     *     CustomRecipes?: Recipes,
     *     CreatedAt?: string,
     *     InstallUpdatesOnBoot?: bool,
     *     UseEbsOptimizedInstances?: bool,
     *     LifecycleEventConfiguration?: LifecycleEventConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
